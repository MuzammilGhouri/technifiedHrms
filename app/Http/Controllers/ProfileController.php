<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\EmployeeEducation;
use App\Models\EmployeeExperience;
use DB;
use App\Http\Requests;

class ProfileController extends Controller
{
    public function show(){

        $details = Employee::where('user_id', \Auth::user()->id)->with('userrole.role')->first();
        $empEducation = EmployeeEducation::where('employee_id',\Auth::user()->id)->get();
        $empExperience = EmployeeExperience::where('employee_id',\Auth::user()->id)->get();
        $events = null;
        return view('hrms.profile', compact('details','events','empEducation','empExperience'));
    }
    
    public function bankDetail(){
        $details = Employee::where('user_id', \Auth::user()->id)->with('userrole.role')->first();
        return view('hrms.profile.bankDetail', compact('details'));
    }
    
    public function updateBank(Request $request){
        
        $id = $request->id;
        $emp = Employee::find($id);
        
        
        $emp->account_number       = $request->account_number;
        $emp->bank_name            = $request->bank_name;
        $emp->un_number            = $request->un_number;
        
        $emp->save();
        
        
        \Session::flash('flash_status', 'success');
        \Session::flash('flash_message', 'Employee Bank Detail Updated Successfully');

        return redirect()->back();
        
    }
    
    public function experienceDetail(){
        $details = Employee::where('user_id', \Auth::user()->id)->with('userrole.role')->first();
        $empExperience = EmployeeExperience::where('employee_id',\Auth::user()->id)->get();
        return view('hrms.profile.experience', compact('empExperience','details'));
    }
    
    public function updateWork(Request $request){
        $id = $request->id;
        $emp = Employee::find($id);
        $experience = $request->group_job;
            $employee_experience_id = $request->empExpId;
            $oldJob = $request->jobTitle;
            $oldComp = $request->companyName;
            $oldComLoc = $request->compLoc;
            $oldJodStartDate = $request->job_date_of_joining;
            $oldJobEndDate = $request->job_date_of_confirmation;
        
        
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
        \Session::flash('flash_message', 'Employee Experience Updated Successfully');

        return redirect()->back();
    }
    public function educaDetail(){
        $details = Employee::where('user_id', \Auth::user()->id)->with('userrole.role')->first();
        $empEducation = EmployeeEducation::where('employee_id',\Auth::user()->id)->get();
        return view('hrms.profile.education', compact('empEducation','details'));
    }
    public function updateEduc(Request $request){
        $id = $request->id;
        $emp = Employee::find($id);
        $education = $request->group_b;
                
            $product_attribute_id = $request->empEdu;
            $oldSchool = $request->school_name;
            $oldDegree = $request->sch_degree;
            $oldFieldStd = $request->field_study;
            $oldJoinDate = $request->sch_date_of_joining;
            $oldEndDate = $request->sch_date_of_confirmation;
            
            
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
        \Session::flash('flash_status', 'success');
        \Session::flash('flash_message', 'Employee Education Updated Successfully');

        return redirect()->back();
    }
    
    public function empDetail(){
         $details = Employee::where('user_id', \Auth::user()->id)->with('userrole.role')->first();
         return view('hrms.profile.employement_detail', compact('details'));
    }
    public function updatePers(Request $request){
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
        $emp->father_name          = $request->father_name;
        $emp->current_address      = $request->current_address;
        $emp->permanent_address    = $request->permanent_address;
        $emp->date_of_confirmation = date_format(date_create($request->date_of_confirmation), 'Y-m-d');
        
        $emp->save();
        
        
        \Session::flash('flash_status', 'success');
        \Session::flash('flash_message', 'Employee Details Updated Successfully');

        return redirect()->back();
    }
    
    public function deleteEduc(Request $request){
            
            $id = $request->id;
            $product_variant = DB::table('employee_education')
                                ->where('id', $id)
                                ->delete();

            if($product_variant){
                return response()->json(['message'=> "Delete Education History Successful", 'status' => true]);
            }else{
                return response()->json(['message'=>'Error Occurred', 'status' => false]);
            }        
        
    }
    public function deleteExp(Request $request){
            
            $id = $request->id;
            $product_variant = DB::table('employee_experience')
                                ->where('id', $id)
                                ->delete();

            if($product_variant){
                return response()->json(['message'=> "Delete Work Experience Successful", 'status' => true]);
            }else{
                return response()->json(['message'=>'Error Occurred', 'status' => false]);
            }        
        
    }
    public function convertToArray($values)
    {
        $result = [];
        foreach($values as $key => $value)
        {
            $result[$key] = $value;
        }
        return $result;
    }
}
