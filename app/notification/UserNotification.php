<?php

namespace App\notification;

use Illuminate\Notifications\Notifiable;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage; 
use Illuminate\Notifications\Notification;

class UserNotification extends Notification
{
    use Notifiable;

   
    public $leaveDetail;
   
    public function __construct($leaveDetail){
        
       
        $this->user = $leaveDetail;
        

        
    }
    
    public function via($notifiable){
        return['database'];
    }
    
    public function toArray($notifiable){
        
        return[
            'form_id'=>$this->user->id,
            'user_id'=>$this->user->user_id,
            'Manager_id'=>$this->user->manager_id,
            'Team_Lead_id'=>$this->user->tl_id,
            'leave_type_id'=>$this->user->leave_type_id,
            'date_from'=>$this->user->date_from,
            'date_to'=>$this->user->date_to,
            'days'=>$this->user->days,
            'status'=>$this->user->status,
            'reason'=>$this->user->reason,
            'description'=>'Submitted the Leave'
            ];
    }
}
?>