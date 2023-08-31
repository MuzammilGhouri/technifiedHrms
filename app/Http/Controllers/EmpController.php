<?php

namespace App\Http\Controllers;

use App\Jobs\ExportData;
use App\Models\Employee;
use App\Models\EmployeeUpload;
use App\Models\Role;
use App\Models\Department;
use App\Models\Team;
use App\Models\UserRole;
use App\Models\EmployeeEducation;
use App\Models\EmployeeExperience;
use App\Promotion;
use App\User;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\imagetable;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use Mail;

class EmpController extends Controller
{
    public function addEmployee()
    {
        $roles = Role::get();
        $teams = Team::get();
        $department  = Department::get();
        $emps= '';
        return view('hrms.employee.add', compact('roles','teams','emps','department'));
    }


    public function processEmployeeUpdate(Request $request){
        
       
        
        $id = $request->id;
        $emp = Employee::find($id);
        if ($request->file('photo')) {

            $file = $request->file('photo') ;
            $fileName = $file->getClientOriginalName();
            
            $folderName = '/hrms.technifiedlabs.com/public/photos/';
            $destinationPath = public_path().$folderName;
            // dd($destinationPath);
            $file->move($destinationPath,$fileName);
        
            $full_path = $folderName.$fileName;

            $emp->photo  = $full_path;    
            
        }
        $emp->gender               = $request->gender;
        $emp->date_of_birth        = date_format(date_create($request->date_of_birth), 'Y-m-d');
        $emp->date_of_joining      = date_format(date_create($request->date_of_joining), 'Y-m-d');
        $emp->number               = $request->number;
        $emp->qualification        = $request->qualification;
        $emp->father_name          = $request->father_name;
        $emp->current_address      = $request->current_address;
        $emp->permanent_address    = $request->permanent_address;
        $emp->date_of_confirmation = date_format(date_create($request->date_of_confirmation), 'Y-m-d');
        $emp->department_id           = $request->department_id;
        $emp->account_number       = $request->account_number;
        $emp->bank_name            = $request->bank_name;
        $emp->un_number            = $request->un_number;
        $emp->emp_department            = $request->emp_department;
        $emp->save();
        $education = $request->group_b;
        $experience = $request->group_job;
        
            $product_attribute_id = $request->empEdu;
            $oldSchool = $request->school_name;
            $oldDegree = $request->sch_degree;
            $oldFieldStd = $request->field_study;
            $oldJoinDate = $request->sch_date_of_joining;
            $oldEndDate = $request->sch_date_of_confirmation;
            
            $employee_experience_id = $request->empExpId;
            $oldJob = $request->jobTitle;
            $oldComp = $request->companyName;
            $oldComLoc = $request->compLoc;
            $oldJodStartDate = $request->job_date_of_joining;
            $oldJobEndDate = $request->job_date_of_confirmation;
            
        if($product_attribute_id != ''){
            
            for($j=0 ;  $j < count($product_attribute_id); $j++){
                $empEducation = EmployeeEducation::find($product_attribute_id[$j]);
                $empEducation->school_name = $oldSchool[$j];
                $empEducation->sch_degree = $oldDegree[$j];
                $empEducation->field_study = $oldFieldStd[$j];
                $empEducation->employee_id = \Auth::user()->id;
                $empEducation->sch_date_of_joining = $oldJoinDate[$j];
                $empEducation->sch_date_of_confirmation = $oldEndDate[$j];
                $empEducation->save();
                
            }
        }
        
            
        for($i=0 ;  $i < count($education); $i++){
            if($education[$i]['school_name'] != ''){
                    
                $employee_education = new EmployeeEducation;
                $employee_education->school_name = $education[$i]['school_name'];
                $employee_education->sch_degree = $education[$i]['sch_degree'];
                $employee_education->field_study = $education[$i]['field_study'];
                $employee_education->employee_id = \Auth::user()->id;
                $employee_education->sch_date_of_joining = $education[$i]['sch_date_of_joining'];
                $employee_education->sch_date_of_confirmation = $education[$i]['sch_date_of_confirmation'];
                $employee_education->save();
            }
            else{
                break;
            }
        }
        if($employee_experience_id != ''){
            for($z=0; $z < count($employee_experience_id); $z++){
                $empExperience = EmployeeExperience::find($employee_experience_id[$z]);
                $empExperience->jobTitle = $oldJob[$z];
                $empExperience->companyName = $oldComp[$z];
                $empExperience->compLoc = $oldComLoc[$z];
                $empExperience->employee_id = \Auth::user()->id;
                $empExperience->job_date_of_joining = $oldJodStartDate[$z];
                $empExperience->job_date_of_confirmation = $oldJobEndDate[$z];
                $empExperience->save();
            }
        }
        for($t=0; $t < count($experience); $t++){
            if($experience[$t]['jobTitle'] != ''){
                $employee_experience = new EmployeeExperience;
                $employee_experience->jobTitle = $experience[$t]['jobTitle'];
                $employee_experience->companyName = $experience[$t]['companyName'];
                $employee_experience->compLoc = $experience[$t]['compLoc'];
                $employee_experience->employee_id = \Auth::user()->id;
                $employee_experience->job_date_of_joining = $experience[$t]['job_date_of_joining'];
                $employee_experience->job_date_of_confirmation = $experience[$t]['job_date_of_confirmation'];
                $employee_experience->save();
                
            }else{
                break;
            }
        }
        
        
      
        
        \Session::flash('flash_status', 'success');
        \Session::flash('flash_message', 'Employee Updated Successfully');

        return redirect()->back();
    }

    public function processEmployee(Request $request)
    {
        
        $filename = '';
        if ($request->file('photo')) {
            $file             = $request->file('photo');
            $filename         = str_random(12);
            $fileExt          = $file->getClientOriginalExtension();
            $allowedExtension = ['jpg', 'jpeg', 'png'];
            $destinationPath  = public_path('photos');
            if (!in_array($fileExt, $allowedExtension)) {
                return redirect()->back()->with('message', 'Extension not allowed');
            }
            $filename = $filename . '.' . $fileExt;
            $file->move($destinationPath, $filename);

        }else{
            $filename = null;
        }

        $user           = new User;
        $user->name     = $request->emp_name;
        $user->email    = $request->emp_email;
        $user->password = bcrypt($request->emp_pass);
        $user->save();

        $emp                       = new Employee;
        $emp->photo                = $filename;
        $emp->name                 = $request->emp_name;
        $emp->code                 = $request->emp_code;
        $emp->status               = 1;
        $emp->gender               = $request->gender;
        $emp->date_of_birth        = date_format(date_create($request->dob), 'Y-m-d');
        $emp->date_of_joining      = date_format(date_create($request->doj), 'Y-m-d');
        $emp->number               = $request->number;
        $emp->qualification        = $request->qualification;
        $emp->emergency_number     = $request->emergency_number;
        $emp->pan_number           = $request->pan_number;
        $emp->father_name          = $request->father_name;
        $emp->current_address      = $request->current_address;
        $emp->permanent_address    = $request->permanent_address;
        $emp->formalities          = $request->formalities;
        $emp->offer_acceptance     = $request->offer_acceptance;
        $emp->probation_period     = $request->probation_period;
        $emp->date_of_confirmation = date_format(date_create($request->date_of_confirmation), 'Y-m-d');
        $emp->designation           = $request->emp_designation;
        $emp->salary               = $request->salary;
        $emp->account_number       = $request->account_number;
        $emp->bank_name            = $request->bank_name;
        $emp->ifsc_code            = $request->ifsc_code;
        $emp->pf_account_number    = $request->pf_account_number;
        $emp->un_number            = $request->un_number;
        $emp->pf_status            = $request->pf_status;
        $emp->date_of_resignation  = date_format(date_create($request->date_of_resignation), 'Y-m-d');
        $emp->notice_period        = $request->notice_period;
        $emp->last_working_day     = date_format(date_create($request->last_working_day), 'Y-m-d');
        $emp->full_final           = $request->full_final;
        $emp->user_id              = $user->id;
        $emp->sick_leave         = $request->emp_sick_leave;
        $emp->annual_leave       = $request->emp_annual_leave;
        $emp->casual_leave       = $request->emp_casual_leave;
        $emp->team_id            = $request->emp_department;
        $emp->department_id           = $request->department_id;
        $emp->save();

        $userRole          = new UserRole();
        $userRole->role_id = $request->role;
        $userRole->user_id = $user->id;
        
        // 	$logo = imagetable::select('img_path')->where('table_name','=','logo')->first();
			$currentDate = Carbon::now()->format('d-M-Y');
			$data = [
                'details'=>[
                    'First_Name' =>$request->emp_name,
                    'Email' =>$request->emp_email,
                    'Password'=>$request->emp_pass,
                    'Logo'=>'https://hrms.technifiedlabs.com/new/img/logonew.png',
                    'heading'=>'Login Credentials',
                    'content'=>'Use these Credentials for login in hrms Technified Labs',
                    'WebsiteName'=>'HRMS Technified Labs',
                    'currentDate'=> $currentDate
                ]
                
            ];
           
            Mail::send('hrms.EmployeeMail', $data, function($message) use ($data) {
    
                $message->from('davidharry15235@gmail.com', "HRMS Technified Labs");
    
                $message->to($data['details']['Email'])->subject($data['details']['heading']);
            });
            // Mail::send('EmployeeMail', $data, function($message) use ($data) {
    
            //     $message->from('davidharry15235@gmail.com', "HRMS Technified Labs");
    
            //     $message->to('davidharry15235@gmail.com')->subject($data['details']['heading']);
            // });
        $userRole->save();
        \Session::flash('flash_status', 'success');
        \Session::flash('flash_message', 'Employee Added Successfully');

        return redirect()->back();
        
        // return json_encode(['title' => 'Success', 'message' => 'Employee added successfully', 'class' => 'modal-header-success']);

    }

    public function showEmployee()
    {
        $emps   = User::with('employee', 'role.role')->get();
        $column = '';
        $string = '';
        // dd($emps);
        return view('hrms.employee.show_emp', compact('emps', 'column', 'string'));
    }

    public function showEdit($id)
    {
        //$emps = Employee::whereid($id)->with('userrole.role')->first();
        $emps = User::where('id', $id)->with('employee', 'role.role')->first();
            $department  = Department::get();
        $roles = Role::get();
        $teams = Team::get();
        // dd($emps);
        return view('hrms.employee.add', compact('emps', 'roles','teams','department'));
    }

    public function doEdit(Request $request, $id)
    {
        $filename = '';
        if ($request->file('photo')) {
            $file             = $request->file('photo');
            $filename         = str_random(12);
            $fileExt          = $file->getClientOriginalExtension();
            $allowedExtension = ['jpg', 'jpeg', 'png'];
            $destinationPath  = public_path('photos');
            if (!in_array($fileExt, $allowedExtension)) {
                return redirect()->back()->with('message', 'Extension not allowed');
            }
            $filename = $filename . '.' . $fileExt;
            $file->move($destinationPath, $filename);

        }

        $photo             = $filename;
        $emp_name          = $request->emp_name;
        $emp_code          = $request->emp_code;
        $emp_status        = $request->status;
        $emp_role          = $request->role;
        $gender            = $request->gender;
        $dob               = '';
        $doj               = '';
        $mob_number        = $request->number;
        $qualification     = $request->qualification;
        $emer_number       = $request->emergency_number;
        $pan_number        = $request->pan_number;
        $father_name       = $request->father_name;
        $address           = $request->current_address;
        $permanent_address = $request->permanent_address;
        $formalities       = $request->formalities;
        $offer_acceptance  = $request->offer_acceptance;
        $prob_period       = $request->probation_period;
        $doc               = date_format(date_create($request->date_of_confirmation), 'Y-m-d');
        $department        = $request->department;
        $salary            = $request->salary;
        $account_number    = $request->account_number;
        $bank_name         = $request->bank_name;
        $ifsc_code         = $request->ifsc_code;
        $pf_account_number = $request->pf_account_number;
        $un_number         = $request->un_number;
        $pf_status         = $request->pf_status;
        $dor               = date_format(date_create($request->date_of_resignation), 'Y-m-d');
        $notice_period     = $request->notice_period;
        $last_working_day  = date_format(date_create($request->last_working_day), 'Y-m-d');
        $full_final        = $request->full_final;
        $empTeam  = $request->emp_department;
        $password = $request->emp_pass;
        $emp_email = $request->emp_email;
        $em_desig = $request->emp_designation;
        $emp_sick = $request->emp_sick_leave;;
        $emp_casual = $request->emp_casual_leave;
        $emp_annual = $request->emp_annual_leave;
        //$edit = Employee::findOrFail($id);
        $emp_department_id           = $request->department_id;
        $edit = Employee::where('user_id', $id)->first();

        if (!empty($photo)) {
            $edit->photo = $photo;
        }
        if ($emp_department_id) {
            $edit->department_id = $emp_department_id;
        }
        if(!empty($em_desig)){
            $edit->designation = $em_desig ;
        }
        if (!empty($emp_name)) {
            $edit->name = $emp_name;
        }
        if (!empty($emp_code)) {
            $edit->code = $emp_code;
        }
        if(!empty($emp_sick)){
            $edit->sick_leave = $emp_sick;
        }
        if(!empty($emp_annual)){
            $edit->annual_leave = $emp_annual;
        }
        if(!empty($emp_casual)){
            $edit->casual_leave = $emp_casual;
        }
        if (isset($emp_status)) {
            $edit->status = $emp_status;
        }
        if (isset($emp_role)) {
            $userRole = UserRole::firstOrNew(['user_id' => $edit->user_id]);
            $userRole->role_id = $emp_role;
            $userRole->save();
        }
        if (isset($gender)) {
            $edit->gender = $gender;
        }
        if(!empty($empTeam)){
            $edit->team_id = $empTeam ;
        }
        if(!empty($password) || !empty($emp_email)){
            $user = User::where('id',$edit->user_id)->first();
            $user->email = $emp_email;
            $user->password = bcrypt($password);
            $user->save();
        }
        if (!empty($dob)) {
            $edit->date_of_birth = $dob;
        }
        if (!empty($doj)) {
            $edit->date_of_joining = $doj;
        }
        if (!empty($mob_number)) {
            $edit->number = $mob_number;
        }
        if (!empty($qualification)) {
            $edit->qualification = $qualification;
        }
        if (!empty($emer_number)) {
            $edit->emergency_number = $emer_number;
        }
        if (!empty($pan_number)) {
            $edit->pan_number = $pan_number;
        }
        if (!empty($father_name)) {
            $edit->father_name = $father_name;
        }
        if (!empty($address)) {
            $edit->current_address = $address;
        }
        if (!empty($permanent_address)) {
            $edit->permanent_address = $permanent_address;
        }

        if (isset($formalities)) {
            $edit->formalities = $formalities;
        }
        if (isset($offer_acceptance)) {
            $edit->offer_acceptance = $offer_acceptance;
        }
        if (!empty($prob_period)) {
            $edit->probation_period = $prob_period;
        }
        if (!empty($doc)) {
            $edit->date_of_confirmation = $doc;
        }
        if (!empty($department)) {
            $edit->department = $department;
        }
        if (!empty($salary)) {
            $edit->salary = $salary;
        }
        if (!empty($account_number)) {
            $edit->account_number = $account_number;
        }
        if (!empty($bank_name)) {
            $edit->bank_name = $bank_name;
        }
        if (!empty($ifsc_code)) {
            $edit->ifsc_code = $ifsc_code;
        }
        if (!empty($pf_account_number)) {
            $edit->pf_account_number = $pf_account_number;
        }
        if (!empty($un_number)) {
            $edit->un_number = $un_number;
        }
        if (isset($pf_status)) {
            $edit->pf_status = $pf_status;
        }
        if (!empty($dor)) {
            $edit->date_of_resignation = $dor;
        }
        if (!empty($notice_period)) {
            $edit->notice_period = $notice_period;
        }
        if (!empty($last_working_day)) {
            $edit->last_working_day = $last_working_day;
        }
        if (isset($full_final)) {
            $edit->full_final = $full_final;
        }
        
        $edit->save();
        \Session::flash('flash_message', 'Employee details successfully updated');

        return redirect()->back();
    }

    public function doDelete()
    {
        $id = $_GET['EmpId'];
        $emp = User::find($id);
        $emp->delete();
        // \Session::flash('flash_status', 'danger');
        // \Session::flash('flash_message', 'Employee Deleted Successfully!');
        return response()->json(['message'=>'Employee Deleted Successfully', 'status' => true]);
        // return redirect()->back();
    }

    public function importFile()
    {
        return view('hrms.employee.upload');
    }

    public function uploadFile(Request $request)
    {
        $files = Input::file('upload_file');

        /* try {*/
        foreach ($files as $file) {
            Excel::load($file, function ($reader) {
                $rows = $reader->get(['emp_name', 'emp_code', 'emp_status', 'role', 'gender', 'dob', 'doj', 'mob_number', 'qualification', 'emer_number', 'pan_number', 'father_name', 'address', 'permanent_address', 'formalities', 'offer_acceptance', 'prob_period', 'doc', 'department', 'salary', 'account_number', 'bank_name', 'ifsc_code', 'pf_account_number', 'un_number', 'pf_status', 'dor', 'notice_period', 'last_working_day', 'full_final']);

                foreach ($rows as $row) {
                    \Log::info($row->role);
                    $user           = new User;
                    $user->name     = $row->emp_name;
                    $user->email    = str_replace(' ', '_', $row->emp_name) . '@sipi-ip.sg';
                    $user->password = bcrypt('123456');
                    $user->save();
                    $attachment         = new Employee();
                    $attachment->photo  = '/img/Emp.jpg';
                    $attachment->name   = $row->emp_name;
                    $attachment->code   = $row->emp_code;
                    $attachment->status = convertStatus($row->emp_status);

                    if (empty($row->gender)) {
                        $attachment->gender = 'Not Exist';
                    } else {
                        $attachment->gender = $row->gender;
                    }
                    if (empty($row->dob)) {
                        $attachment->date_of_birth = '0000-00-00';
                    } else {
                        $attachment->date_of_birth = date('Y-m-d', strtotime($row->dob));
                    }
                    if (empty($row->doj)) {
                        $attachment->date_of_joining = '0000-00-00';
                    } else {
                        $attachment->date_of_joining = date('Y-m-d', strtotime($row->doj));
                    }
                    if (empty($row->mob_number)) {
                        $attachment->number = '1234567890';
                    } else {
                        $attachment->number = $row->mob_number;
                    }
                    if (empty($row->qualification)) {
                        $attachment->qualification = 'Not Exist';
                    } else {
                        $attachment->qualification = $row->qualification;
                    }
                    if (empty($row->emer_number)) {
                        $attachment->emergency_number = '1234567890';
                    } else {
                        $attachment->emergency_number = $row->emer_number;
                    }
                    if (empty($row->pan_number)) {
                        $attachment->pan_number = 'Not Exist';
                    } else {
                        $attachment->pan_number = $row->pan_number;
                    }
                    if (empty($row->father_name)) {
                        $attachment->father_name = 'Not Exist';
                    } else {
                        $attachment->father_name = $row->father_name;
                    }
                    if (empty($row->address)) {
                        $attachment->current_address = 'Not Exist';
                    } else {
                        $attachment->current_address = $row->address;
                    }
                    if (empty($row->permanent_address)) {
                        $attachment->permanent_address = 'Not Exist';
                    } else {
                        $attachment->permanent_address = $row->permanent_address;
                    }
                    if (empty($row->emp_formalities)) {
                        $attachment->formalities = '1';
                    } else {
                        $attachment->formalities = $row->emp_formalities;
                    }
                    if (empty($row->offer_acceptance)) {
                        $attachment->offer_acceptance = '1';
                    } else {
                        $attachment->offer_acceptance = $row->offer_acceptance;
                    }
                    if (empty($row->prob_period)) {
                        $attachment->probation_period = 'Not Exist';
                    } else {
                        $attachment->probation_period = $row->prob_period;
                    }
                    if (empty($row->doc)) {
                        $attachment->date_of_confirmation = '0000-00-00';
                    } else {
                        $attachment->date_of_confirmation = date('Y-m-d', strtotime($row->doc));
                    }
                    if (empty($row->department)) {
                        $attachment->department = 'Not Exist';
                    } else {
                        $attachment->department = $row->department;
                    }
                    if (empty($row->salary)) {
                        $attachment->salary = '00000';
                    } else {
                        $attachment->salary = $row->salary;
                    }
                    if (empty($row->account_number)) {
                        $attachment->account_number = 'Not Exist';
                    } else {
                        $attachment->account_number = $row->account_number;
                    }
                    if (empty($row->bank_name)) {
                        $attachment->bank_name = 'Not Exist';
                    } else {
                        $attachment->bank_name = $row->bank_name;
                    }
                    if (empty($row->ifsc_code)) {
                        $attachment->ifsc_code = 'Not Exist';
                    } else {
                        $attachment->ifsc_code = $row->ifsc_code;
                    }
                    if (empty($row->pf_account_number)) {
                        $attachment->pf_account_number = 'Not Exist';
                    } else {
                        $attachment->pf_account_number = $row->pf_account_number;
                    }
                    if (empty($row->un_number)) {
                        $attachment->un_number = 'Not Exist';
                    } else {
                        $attachment->un_number = $row->un_number;
                    }
                    if (empty($row->pf_status)) {
                        $attachment->pf_status = '1';
                    } else {
                        $attachment->pf_status = $row->pf_status;
                    }
                    if (empty($row->dor)) {
                        $attachment->date_of_resignation = '0000-00-00';
                    } else {
                        $attachment->date_of_resignation = date('Y-m-d', strtotime($row->dor));
                    }
                    if (empty($row->notice_period)) {
                        $attachment->notice_period = 'Not exist';
                    } else {
                        $attachment->notice_period = $row->notice_period;
                    }
                    if (empty($row->last_working_day)) {
                        $attachment->last_working_day = '0000-00-00';
                    } else {
                        $attachment->last_working_day = date('Y-m-d', strtotime($row->last_working_day));
                    }
                    if (empty($row->full_final)) {
                        $attachment->full_final = 'Not exist';
                    } else {
                        $attachment->full_final = $row->full_final;
                    }
                    $attachment->user_id = $user->id;
                    $attachment->save();

                    $userRole          = new UserRole();
                    $userRole->role_id = convertRole($row->role);
                    $userRole->user_id = $user->id;
                    $userRole->save();

                }

                return 1;
                //return redirect('upload_form');*/
            }
            );

        }
        /*catch (\Exception $e) {
           return $e->getMessage();*/

        \Session::flash('success', ' Employee details uploaded successfully.');

        return redirect()->back();
    }

    public function searchEmployee(Request $request)
    {
        $string = $request->string;
        $column = $request->column;
        if ($request->button == 'Search') {
            if ($string == '' && $column == '') {
                \Session::flash('success', ' Employee details uploaded successfully.');
                return redirect()->to('employee-manager');
            } elseif ($string != '' && $column == '') {
                \Session::flash('failed', ' Please select category.');
                return redirect()->to('employee-manager');
            }elseif ($column == 'email') {
                $emps = User::with('employee')->where($column,'like', "%$string%")->paginate(20);
            } else {
                $emps = User::whereHas('employee', function ($q) use ($column, $string) {
                    $q->whereRaw($column . " like '%" . $string . "%'");
                }
                )->with('employee')->paginate(20);
            }

            return view('hrms.employee.show_emp', compact('emps', 'column', 'string'));
        } else {
            if ($column == '') {
                $emps = User::with('employee')->get();
            } elseif ($column == 'email') {
                $emps = User::with('employee')->where($request->column, $request->string)->paginate(20);
            } else {
                $emps = User::whereHas('employee', function ($q) use ($column, $string) {
                    $q->whereRaw($column . " like '%" . $string . "%'");
                }
                )->with('employee')->get();
            }

            $fileName = 'Employee_Listing_' . rand(1, 1000) . '.csv';
            $filePath = storage_path('export/') . $fileName;
            $file     = new \SplFileObject($filePath, "a");
            // Add header to csv file.
            $headers = ['id', 'photo', 'code', 'name', 'status', 'gender', 'date_of_birth', 'date_of_joining', 'number', 'qualification', 'emergency_number', 'pan_number', 'father_name', 'current_address', 'permanent_address', 'formalities', 'offer_acceptance', 'probation_period', 'date_of_confirmation', 'department', 'salary', 'account_number', 'bank_name', 'ifsc_code', 'pf_account_number', 'un_number', 'pf_status', 'date_of_resignation', 'notice_period', 'last_working_day', 'full_final', 'user_id', 'created_at', 'updated_at'];
            $file->fputcsv($headers);
            foreach ($emps as $emp) {
                $file->fputcsv([
                                   $emp->id,
                                   (
                                   $emp->employee->photo) ? $emp->employee->photo : 'Not available',
                                   $emp->employee->code,
                                   $emp->employee->name,
                                   $emp->employee->status,
                                   $emp->employee->gender,
                                   $emp->employee->date_of_birth,
                                   $emp->employee->date_of_joining,
                                   $emp->employee->number,
                                   $emp->employee->qualification,
                                   $emp->employee->emergency_number,
                                   $emp->employee->pan_number,
                                   $emp->employee->father_name,
                                   $emp->employee->current_address,
                                   $emp->employee->permanent_address,
                                   $emp->employee->formalities,
                                   $emp->employee->offer_acceptance,
                                   $emp->employee->probation_period,
                                   $emp->employee->date_of_confirmation,
                                   $emp->employee->department,
                                   $emp->employee->salary,
                                   $emp->employee->account_number,
                                   $emp->employee->bank_name,
                                   $emp->employee->ifsc_code,
                                   $emp->employee->pf_account_number,
                                   $emp->employee->un_number,
                                   $emp->employee->pf_status,
                                   $emp->employee->date_of_resignation,
                                   $emp->employee->notice_period,
                                   $emp->employee->last_working_day,
                                   $emp->employee->full_final
                               ]
                );
            }

            return response()->download(storage_path('export/') . $fileName);
        }
    }

    public function viewEmp($id){
        $details = Employee::where('user_id', $id)->with('userrole.role')->first();
        $empEducation = EmployeeEducation::where('employee_id',$id)->get();
        $empExperience = EmployeeExperience::where('employee_id',$id)->get();
        
        
        return view ('hrms.employee.show_emp_detail',compact('details','empEducation','empExperience'));
    }
    public function showDetails()
    {
        $emps = User::with('employee')->get();
        return view('hrms.employee.show_bank_detail', compact('emps'));
    }

    public function updateAccountDetail(Request $request)
    {
        try {
            $model                    = Employee::where('id', $request->employee_id)->first();
            $model->bank_name         = $request->bank_name;
            $model->account_number    = $request->account_number;
            $model->ifsc_code         = $request->ifsc_code;
            $model->pf_account_number = $request->pf_account_number;
            $model->save();

            return json_encode('success');
        } catch (\Exception $e) {
            \Log::info($e->getMessage() . ' on ' . $e->getLine() . ' in ' . $e->getFile());

            return json_encode('failed');
        }

    }
    public function changeStatus(Request $request)
    {   
        
        $user = Employee::where('user_id',$request->user_id)->first();
        // dd($user);
        $user->status = $request->status;
        $user->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }

}
