<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttendanceManager extends Model
{
    public static function getFilterdSearchResults($request)
    {
        $name = $request['employee'];
        $column = explode("-",$request['daterange']);
        $dateFrom = date_format(date_create(str_replace(' ', '', $column[0])), 'Y-m-d');
        $dateTo = date_format(date_create(str_replace(' ', '', $column[1])), 'Y-m-d');
        $attendances = AttendanceManager::whereRaw('name' . " like '%" . $name . "%'")->whereBetween('date', [$dateFrom, $dateTo])->paginate(20);
       
       

        return $attendances;
    }

    public static function saveExcelData($row, $hoursWorked, $difference)
    {
        $user = Employee::where('code', $row->code)->first();
        dump($user);
        die();
        
        $attendance = new AttendanceManager();
        $attendance->name = $row->name;
        $attendance->code = $row->code;
        $attendance->date = date_format(date_create($row->date), 'Y-m-d');
        $attendance->day = covertDateToDay($row->days);
        \Log::info('inTime='.$row->in_time);
        $attendance->in_time = isset($row->in_time)? $row->in_time : 'H:i:s' ;
        $attendance->out_time = isset($row->out_time)? $row->out_time : 'H:i:s';
        $attendance->status = convertAttendanceTo(preg_replace('/\s+/', '', $row->status));
        $attendance->leave_status = $row->leave_status;
        $attendance->user_id = $user->user_id;
        $attendance->hours_worked = $hoursWorked;
        $attendance->difference = $difference;
        $attendance->save();
    }
}
