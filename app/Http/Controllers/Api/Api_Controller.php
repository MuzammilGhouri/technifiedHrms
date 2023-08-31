<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Post;
use App\Models\Employee;
use App\notification\UserNotification;
use Illuminate\Http\Request;
use DB;
use App\User;
use App\EmployeeLeaves;
use Illuminate\Support\Facades\Hash;
 use App\Models\AttendanceManager;

class Api_Controller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    { 
       
        $user = User::where(['email' => $request->email])->first();

        if(Hash::check($request->password,$user->password))
        {
           
      
            return response()->json([
                
            
                'status'=>1,
                'message'=>'Login Successfully',
                'user'=>$user,
                
            ]);

        }else{

            return response()->json([
                'message'=>'Invalid User Name Or Password'
            ]);

        }
        
    }
    public function userAttendance($id = '') 
    { 
       
        // $user = User::where(['id' =>$id])->first();
        $attendance = AttendanceManager::where(['user_id'=>$id])->get();
        
            return response()->json([
            'status' => 'success',
            'attendance' => $attendance,
            200
        ]);

        
    
    }
    public function Employee($id = '') 
    { 
       
        // $user = User::where(['id' =>$id])->first();
        $employee = Employee::where(['user_id'=>$id])->get();
        
            return response()->json([
            'status' => 'success',
            'employee' => $employee,
            200
        ]);

        
    
    }
    public function notes(){
        $notes = DB::table('notes')->get();
        return response()->json([
            'status' => 'success',
            'employee' => $notes,
            200
        ]);
    }
}
