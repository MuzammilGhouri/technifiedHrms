<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Post;
use App\notification\UserNotification;
use Illuminate\Http\Request;
use DB;
use App\EmployeeLeaves;
use App\Models\Invoice;
use App\Models\Employee;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('replies')->where('user_id', \Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('home', compact('posts'));
    }
    public function birthdayWish(){
        $today=now();

        $user = DB::table('employees')->where('user_id',\Auth::user()->id)->first();
        $current = date('Y-m-d');
        $currentDate = date("d");
        $currentMonth = date("m");
        $currentYear = (date("Y"));
        $timestamp = strtotime($user->date_of_birth);
        $pastBirth = strtotime($user->birthdaycard);
       
        if( $currentYear != date('Y', $pastBirth) || $user->birthdaycard == ''  ){
            if(date('d', $timestamp) == $currentDate && date('m', $timestamp) == $currentMonth){
                DB::table('employees')->where('user_id',\Auth::user()->id)->update(['birthdaycard'=>date('Y-m-d')]);
                return response()->json(['Date'=>$user->date_of_birth,'status'=>'true']);
                   
            }else{
                return response()->json(['Date'=>'','status'=>'false']);
            }
        }else{
            return response()->json(['Date'=>'','status'=>'false']);
        }
        
        
         
    }
    
    public function notification($id){
        
        $userNotification =  auth()->user()->notifications->first();
        
        auth()->user()->notifications->where('id', $id)->markAsRead();
        
        $leaves = EmployeeLeaves::with('user.employee')->where('id',$userNotification->data['form_id'])->get();
        
        // auth()->user()->notifications()->where('id',$id)->markAsRead();
        
        return view('hrms.leave.show_leave_notification', compact('leaves'));
        
    }
    public function allNotifi(){
        
        
        
        return view('hrms.notificationList');
    }
    
    public function myInvoice(){
        if(\Auth::user()->isHR()){
            $invoices = Invoice::where('employee_id',1)->get();
        }else{
            $invoices = Invoice::where('employee_id',\Auth::user()->employee->id)->get();
        }
        // dd($invoice);
        return view('hrms.invoice.index',compact('invoices'));
        
    }
    
    public function teamMember(){
        if(\Auth::user()->isManager()){
            $members = Employee::where('department_id',\Auth::user()->employee->department_id)->where('user_id','!=',\Auth::user()->id)->with('user')->get();
            // dd($members);
            return view('hrms.members.index',compact('members'));
        }elseif(\Auth::user()->isteamLaad()){
            
        }
    }
}
