<?php

  namespace App\Http\Controllers;

  use App\Models\AttendanceManager;
  use App\Models\AttendanceFilename;
  use App\Repositories\ExportRepository;
  use App\Repositories\ImportAttendanceData;
  use App\Repositories\UploadRepository;
  use Maatwebsite\Excel\Facades\Excel;
  use App\Imports\Attendanceimport;
  use DB;
  use Auth;
  use Illuminate\Http\Request;
  use Illuminate\Support\Facades\Input;
  use App\notification\UserAttendance;
  use App\Models\Employee;
  use App\EmployeeLeaves;
  use App\User;

  class AttendanceController extends Controller
  {
    public $export;
    public $upload;
    public $attendanceData;

    /**
     * AttendanceController constructor.
     * @param ExportRepository $exportRepository
     * @param UploadRepository $uploadRepository
     * @param ImportAttendanceData $attendanceData
     */
    public function __construct(ExportRepository $exportRepository, UploadRepository $uploadRepository, ImportAttendanceData $attendanceData)
    {
      $this->export = $exportRepository;
      $this->upload = $uploadRepository;
      $this->attendanceData = $attendanceData;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function importAttendanceFile()
    {
      $files = AttendanceFilename::orderBy('id', 'desc')->paginate(10);
      return view('hrms.attendance.upload_file', compact('files'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function uploadFile(Request $request)
    {
      if(Input::hasFile('upload_file')) {
        $file = Input::file('upload_file');
        DB::table('attendance_filenames')->insert(
          [
            'name' => $file->getClientOriginalName(),
            'description' => $request->description,
            'date' => date('Y-m-d H:i:s')
          ]
        );
        if($file->getClientOriginalName()) {
          \Session::flash('success', ' Uploaded successfully.');
        //   Excel::toArray(new Attendanceimport,request()->file('upload_file'))[0];
        // dd( request()->file('upload_file'));
        
        
        // For Php Function Use Csv
        //   Excel::import(new Attendanceimport, request()->file('upload_file'));
        
        $file =request()->file('upload_file'); // Path to your CSV file
        
        if (($handle = fopen($file, 'r')) !== false) {
            // Read the header row
            $header = fgetcsv($handle);
        
            // Initialize an empty array to store the data
            $data = [];
            
            // Read each row of data
            while (($row = fgetcsv($handle)) !== false) {
                // Combine the header and row into an associative array
                $data[] = array_combine($header, $row);
            }
        
            // Close the file handle
            fclose($handle);
           
            foreach($data as $key => $value)
            {   
                // dd($value['﻿AC-No.']);
                $user = Employee::where('code', $value['﻿AC-No.'])->first();
                
                	if($user != null){
                        
                        if($value['Absent'] == 'True'){
                           
                			$status = 'A';
                		}else{
                
                			$status = 'P';
                		}
                        
                        // for Att_time
            			if($value['ATT_Time'] == ''){
            				
            				$att_time = '00:00';
            			}
            			else{
            
            				$att_time = $value['ATT_Time'];
            			}
            			
            			//For Clock In
            			$dateClockIn = strtotime($value['Clock In']);
            		    if($value['Clock In'] == ''){
				
            				$att_time_in = '00:00:00';
            			}
            			else{
            
            				$att_time_in = date('h:i', $dateClockIn);
            			}
            			
            			//For Clock out
            			$dateClockOut = strtotime($value['Clock Out']);
            			if($value['Clock Out'] == ''){
				
            				$att_time_out = '00:00:00';
            			}
            			else{
            
            				// $att_time_out = date('h:i', $dateClockIn);
            				$att_time_out = date('h:i', $dateClockOut);
            			}
            			
            			//For Late
            			$dateLate = strtotime($value['OT Time']);
            			if($value['OT Time'] == ''){
				
            				$att_time_late = '00:00';
            			}
            			else{
            
            				$att_time_late = date('h:i', $dateLate);
            			}
                        //For Early
                        $dateEarly = strtotime($value['Early']);
                        if($value['Early'] == ''){
				
            				$att_time_early = '00:00';
            			}
            			else{
            
            				$att_time_early =  date('h:i', $dateEarly);
            			}
                	    //For Date Conversion
                	    $date = strtotime($value['Date']);
                	    $newDate = $date;
                		$myDateTime = date("Y-m-d", $newDate);
                		
                		
                		if($value['Absent'] == 'True'){
                			$employeeLeave = EmployeeLeaves::where('user_id', $user->user_id)->where('date_from', '<=', $myDateTime)->where('date_to', '>=', $myDateTime)->first();
                            if($employeeLeave){
                                if($employeeLeave->status == '1')
                                {
                                    $value['Absent'] = 'Approved';
                                }
                                elseif ($employeeLeave->status == '2')
                                {
                                    $value['Absent'] = 'Unapproved';
                                }
                                else
                                {
                                    $value['Absent'] = 'Pending';
                                }
                            }
                            if($value['Absent'] == 'True'){
                            	$newDate = date('l',strtotime($myDateTime));
                                if($newDate == 'Saturday'){
                                    
                                    $value['Absent'] = 'Saturday Off';
                                    
                                }elseif($newDate == 'Sunday'){
                                    $value['Absent'] = 'Sunday Off';
                                }
                            }
                		}
                // 		dump($value['Absent']);
                		 DB::table('attendance_managers')->insert(
            			    [
            			    	'name' => $user->name,
            			    	'code' => $user->code,
            			    	'date' => $myDateTime,
                                'day' => date('l',strtotime($myDateTime)),
            			    	'in_time' => $att_time_in,
            			    	'out_time' => $att_time_out,
            			    	'leave_status' => $value['Absent'],
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
            return redirect()->back();

           
        } else {
            // echo "Failed to open the file: $file";
            return redirect()->back()->with('flash_message', 'Failed to open the file');
        }
          
         
        }
       
      }
      else {
        return redirect()->back()->with('flash_message', 'Please choose a file to upload');
      }
      $user = User::all();
      $user->notify(new notificationStatus($leaveDetail));
      \Session::flash('flash_message1', 'File successfully Uploaded!');
      return redirect()->back();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showSheetDetails(Request $request)
    {
      $name = '';
      $daterange = '';
      $dateFrom = '';
      $dateTo = '';
      $perPage = 25;
      $keyword = $request->get('search');
      
       if (!empty($keyword)) {
                $attendances = AttendanceManager::where('attendance_managers.name', 'LIKE', "%$keyword%")
                ->orWhere('attendance_managers.code', 'LIKE', "%$keyword%")
                ->orWhere('attendance_managers.day', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        }else {
            if(Auth::user()->isHR() || Auth::user()->isCEO()){
                
                $attendances = AttendanceManager::all();
            }else{
                $attendances = AttendanceManager::where('user_id',Auth::user()->id)->get();
            }
        }
        if(Auth::user()->isHR() || Auth::user()->isCEO()){
            $attendances = AttendanceManager::all();
            $employees = DB::table('employees')->get();
        }else{
            $attendances = AttendanceManager::where('user_id',Auth::user()->id)->get();
            $employees = DB::table('employees')->where('user_id',Auth::user()->id)->get();
        }
      return view('hrms.attendance.show_attendance_sheet_details', compact('attendances','employees', 'name', 'daterange', 'dateFrom', 'dateTo'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function doDelete($id)
    {
      $file = AttendanceFilename::find($id);
      $file->delete();

      \Session::flash('flash_message1', 'File successfully Deleted!');
      return redirect()->back();
    }
    
    public function employeeAttend(){
        
        $user = User::all();
        return view('hrms.attendance.employeeAttendance',compact('user'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View|\Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function searchAttendance(Request $request)
    {   
        $name = $request->employee;
        $daterange = $request->daterange;
        if(Auth::user()->isHr() || Auth::user()->isCEO()){
            $employees = DB::table('employees')->get();
        }else{
            $employees = DB::table('employees')->where('user_id',Auth::user()->id)->get();
        }
        
      if($request->button == 'Search'){
         
          $attendances = AttendanceManager::getFilterdSearchResults($request->all());
           
          return view('hrms.attendance.show_attendance_sheet_details', compact('attendances','employees', 'name', 'daterange'));
      }
    }
  }






