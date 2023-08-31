<?php
namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Team;
use App\Models\Role;
use App\Models\Department;
use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class DepartmentController extends Controller
{
    public function addDepartment(Request $request){

        $emp  = User::get();
        $keyword = $request->get('search');
        $perPage = 200;
        if (!empty($keyword)) {
                $depart = Department::where('department.name', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        }else {
            $depart = Department::all();
        }
        return view('hrms.department.add_department',compact('emp','depart'));
    }
    
    public function storeDepartment(Request $request){
        
        $depart = new Department();
        $depart->name = $request->depart_name;
        $depart->head_id = $request->head;
        $depart->save();
        
        \Session::flash('flash_message', 'Department successfully added!');
        return redirect()->back();
    }
    
    public function showDepart(Request $request){
        $keyword = $request->get('search');
        $perPage = 200;
        if (!empty($keyword)) {
                $depart = Department::where('department.name', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        }else {
            $depart = Department::all();
        }
        
        return view('hrms.department.department_listing',compact('depart'));
    }
    
    public function showEdit($id)
    {
       
        $dept = Department::where('id', $id)->first();
        $emp = User::all();
        //  dd($dept);
        return view('hrms.department.edit_depart', compact('dept','emp'));
    }
    
    public function doEdit(Request $request, $id){
        
        $requestData['name'] = $request->depart_name;
        $requestData['head_id'] = $request->head;
        
        DB::table('department')->where('id',$id)->update($requestData);
        
        \Session::flash('flash_message', 'Department successfully updated!');
        return redirect()->back();
    }
    
    public function doDelete($id){
        
        Department::destroy($id);
        return redirect('depart-listing')->with('message','Product Delete successfully');
    }
}