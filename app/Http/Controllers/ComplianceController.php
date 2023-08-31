<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Compliance;
use App\User;
use Auth;
use Mail;
use Carbon\Carbon;

use Illuminate\Support\Facades\Session;

class ComplianceController extends Controller
{
    //

    public function addCompliance(){
        
        $department = Department::where('comp_status',1)->get();
        return view('hrms.compliance.add',compact('department'));
    }
    
    public function storeCompliance(Request $request)
    {
        $ticket = new Compliance;
        $ticket->token_no = '#'.rand(0,9999);
        $ticket->DeptId = $request->department_id;
        $ticket->priority = $request->priority;
        $ticket->title = $request->comp_title;
        $ticket->complianceNotes = $request->comp_note;
        $ticket->sender_id = Auth::user()->id;
        
        $headId = Department::where('id',$request->department_id)->first();
        $headUser  = User::where('id',$headId->head_id)->first();
        $ticket->save();
        $currentDate = Carbon::now()->format('d-M-Y');
			$data = [
                'details'=>[
                    'First_Name' =>$headUser->name,
                    'Email' =>$headUser->email,
                    'Logo'=>'https://hrms.technifiedlabs.com/new/img/logonew.png',
                    'heading'=>$request->comp_title,
                    'Ticket_no'=>$ticket->token_no,
                    'content'=>$request->comp_note,
                    'Priority'=>$ticket->priority,
                    'OpenByName'=>Auth::user()->name,
                    'Department'=>$headId->name,
                    'WebsiteName'=>'HRMS Technified Labs',
                    'currentDate'=> $currentDate
                ]
                
            ];
            Mail::send('hrms.complianceMail', $data, function($message) use ($data) {
    
                $message->from('davidharry15235@gmail.com', "HRMS Technified Labs");
    
                $message->to($data['details']['Email'])->subject($data['details']['heading']);
            });
            // Mail::send('EmployeeMail', $data, function($message) use ($data) {
    
            //     $message->from('davidharry15235@gmail.com', "HRMS Technified Labs");
    
            //     $message->to('davidharry15235@gmail.com')->subject($data['details']['heading']);
            // });
        
        
        
        
        \Session::flash('flash_message', 'Your Ticket is Opened');
        return redirect()->back();
        
        
    }
    
    public function showMycompliance(){
        $ticket = Compliance::where('sender_id', Auth::user()->id)->get();
        return view('hrms.compliance.showmycompliance', compact('ticket'));
    }
    
    
    public function complianceview($id){
        $ticket = Compliance::find($id);
        
        return view('hrms.compliance.complianceview', compact('ticket'));
    }
    
    public function ticketView(){
    //   $ticketDepart = Department::where('comp_status',1)->get();
        $DepartHead = Department::where('head_id',Auth::user()->id)->first();
            
        $ticket = Compliance::where('DeptId', $DepartHead->id)->get();
        return view('hrms.compliance.viewticket', compact('ticket'));
    }
    
    public function ticketcomplete(Request $request){
        $ticket = Compliance::find($request->ticket_id);
        $ticket->status = 1;
        
        $ticket->save();
        
        
        \Session::flash('flash_message', 'Ticket is Completed');
        return redirect()->back();
    }
    
    
    
    
}

