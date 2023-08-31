<?php
namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Notes;
use App\Models\Role;
use App\Models\Department;
use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Requests;
use Image;
use File;
use DB;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Notifications\Notifiable;
use App\notification\UserNotice;

class NotesController extends Controller
{   
    use Notifiable;
    public function __construct(Mailer $mailer)
    {
      $this->mailer = $mailer;
    }
    public function addnotes(Request $request)
    {   
        $notes = Notes::get();
        return view('hrms.notes.add_notes',compact('notes'));
    }
    public function processNote(Request $request){
        
        
        
        $addNote = new Notes();
        $addNote->name = $request->note_name;
        $addNote->detail = $request->detail;    
            if ($request->hasFile('image')) {
                
                $file = $request->file('image') ;
                $fileName = $file->getClientOriginalName();
                
                $folderName = '/hrms.technifiedlabs.com/public/notes/';
                $destinationPath = public_path().$folderName;
                // dd($destinationPath);
                $file->move($destinationPath,$fileName);
            
                $full_path = $folderName.$fileName;
    
                $addNote->image = $full_path;
            }
            
        $addNote->save();
        $noticeDetail = DB::table('notes')->where('id',$addNote->id)->first();
        $Users = User::where('id','!=',1)->get();
        foreach($Users as $user){
            $user->notify(new UserNotice($noticeDetail));   
        }
        
        \Session::flash('flash_status', 'success');
        \Session::flash('flash_message', 'Note Add Successfully');

        return redirect()->back();
    }
    
    public function showNote(){
        $notes = Notes::orderBy('id', 'DESC')->get();
        $user = DB::table('employees')->where('id',1)->first();
        return view('hrms.notes.notes_listing',compact('notes','user'));
    }
    
    public function showEdit($id){
        
        $note = Notes::where('id',$id)->get();
       
        return view('hrms.notes.edit_note',compact('note'));
        
    }
    
    public function doEdit(Request $request, $id){
        
        $editNote = Notes::where('id',$id)->first();
        $editNote->name = $request->note_name;
        $editNote->detail = $request->detail;
                    
            if ($request->hasFile('image')) {
                
                $image_path = public_path($editNote->image); 
            
                if(File::exists($image_path)) {
                    File::delete($image_path);
                }
                $file = $request->file('image') ;
                $fileName = $file->getClientOriginalName();
                
                $folderName = '/hrms.technifiedlabs.com/public/notes/';
                $destinationPath = public_path().$folderName;
                // dd($destinationPath);
                $file->move($destinationPath,$fileName);
            
                $full_path = $folderName.$fileName;
    
                $editNote->image = $full_path;
            }
        $editNote->update();
        \Session::flash('flash_status', 'success');
        \Session::flash('flash_message', 'Note Update Successfully');
        return redirect('notice-listing');
    }
    
    public function doDelete($id){
        $note = Notes::where('id',$id);
        $note->delete();

        \Session::flash('flash_status', 'success');
        \Session::flash('flash_message', 'Note Remove Successfully');
        return redirect()->back();
    }
    
    public function detail($id){
        
        $userNotification =  auth()->user()->notifications->where('id', $id)->first();
        auth()->user()->notifications->where('id', $id)->markAsRead();
        // dd($userNotification->data);
        $notice = Notes::where('id',$userNotification->data['notice_id'])->first();
        $user = DB::table('employees')->where('id',1)->first();
        return view('hrms.notes.noticeDetail',compact('notice','user'));
        
    }
}