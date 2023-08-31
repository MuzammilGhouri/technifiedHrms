<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\Employee;
use App\Models\AttendanceManager;
use App\EmployeeLeaves;
use DB;


class Attendanceimport implements ToCollection,ToModel,WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        //
    }

    public function model(array $row)
    {   
        
    	$status = 'P';
    // 	dd($status);
    	$user = Employee::where('code', $row['ac_no'])->first();
    	if($user != null){
    	    
    	    if($row['att_time'] || $row['att_time'] == ""){
    	        $row['att_time'] = null;
    	    }
    	    
    	    //For Att Time
    	    $total = $row['att_time'] * 24;
    	    $hours = floor($total);
    	    $minute_fraction = $total - $hours; //Now has only the decimal part
            $minutes = $minute_fraction * 60; //Get the number of minutes
            $att_time = $hours . ":" . $minutes;
            
            //For Clock In
            if($row['clock_in'] || $row['clock_in'] == ""){
    	        $row['clock_in'] = null;
    	        dump($row['clock_in']);
    	    }
            $totalIn = (int)$row['clock_in']* 24;
            $hoursin = floor($totalIn);
            $minute_fraction_in = $totalIn - $hoursin;
            $minutes_in = $minute_fraction_in * 60; //Get the number of minutes
            $att_time_in = $hoursin . ":" . $minutes_in;
    	    
    	    
    	    //For Clock out
    	    if($row['clock_out'] || $row['clock_out'] == ""){
    	        $row['clock_out'] = null;
    	        dump($row['clock_out']);
    	    }
    	    $total_out = (int)$row['clock_out']* 24;
            $hours_out = floor($total_out);
            $minute_fraction_out = $total_out - $hours_out;
            $minutes_out = $minute_fraction_out * 60; //Get the number of minutes
            $att_time_out = $hours_out . ":" . $minutes_out;
    	    
    	    //For Late
    	    if($row['late'] || $row['late'] == ""){
    	        $row['late'] = null;
    	        dump($row['late']);
    	    }
    	    $total_late = (int)$row['late']* 24;
            $hours_late = floor($total_late);
            $minute_fraction_late = $total_late - $hours_late;
            $minutes_late = $minute_fraction_late * 60; //Get the number of minutes
            $att_time_late = $hours_late . ":" . $minutes_late;
    	    
    	    
    	    //For Early
    	    if($row['early'] || $row['early'] == ""){
    	        $row['early'] = null;
    	        dump($row['early']);
    	    }
    	    $total_early = $row['early']* 24;
            $hours_early = floor($total_early);
            $minute_fraction_early = $total_early - $hours_early;
            $minutes_early = $minute_fraction_early * 60; //Get the number of minutes
            $att_time_early = $hours_early . ":" . $minutes_early;
    	    
    	    
    	    //For Date Conversion
    	    $date = strtotime($row['date']);
    	    $newDate = $date;
    		$myDateTime = gmdate("Y-m-d", $newDate);
    		
    		if($row['absent'] == 'True'){
    			$employeeLeave = EmployeeLeaves::where('user_id', $user->user_id)->where('date_from', '<=', $myDateTime)->where('date_to', '>=', $myDateTime)->first();
                if($employeeLeave){
                    if($employeeLeave->status == '1')
                    {
                        $row['absent'] = 'Approved';
                    }
                    elseif ($employeeLeave->status == '2')
                    {
                        $row['absent'] = 'Unapproved';
                    }
                    else
                    {
                        $row['absent'] = 'Pending';
                    }
                }
                if($row['absent'] == 'True'){
                	$newDate = date('l',strtotime($myDateTime));
                    if($newDate == 'Saturday'){
                        $row['absent'] = 'Saturday Off';
                    }elseif($newDate == 'Sunday'){
                        $row['absent'] = 'Sunday Off';
                    }
                }
    		}
            dump($total_early);
    		DB::table('attendance_managers')->insert(
			    [
			    	'name' => $user->name,
			    	'code' => $user->code,
			    	'date' => $myDateTime,
                    'day' => date('l',strtotime($myDateTime)),
			    	'in_time' => $att_time_in,
			    	'out_time' => $att_time_out,
			    	'leave_status' => $row['absent'],
			    	'status' => convertAttendanceTo(preg_replace('/\s+/', '', $status)),
			    	'hours_worked' => $att_time,
			    	'difference' => 0,
			    	'user_id' => $user->user_id,
			    	'late' => $att_time_late,
			    	'early' => $att_time_early
			  	]
			);
	       
    	}
    }
}
