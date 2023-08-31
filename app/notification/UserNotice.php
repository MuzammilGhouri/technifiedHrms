<?php

namespace App\notification;

use Illuminate\Notifications\Notifiable;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage; 
use Illuminate\Notifications\Notification;

class UserNotice extends Notification
{
    use Notifiable;

   
    public $noticeDetail;
   
    public function __construct($noticeDetail){
        
       
        $this->user = $noticeDetail;
        
        

        
    }
    
    public function via($notifiable){
        return['database'];
    }
    
    public function toArray($notifiable){
        
        return[
            'notice_id'=>$this->user->id,
            'user_id'=>'1',
            'description'=>'Upload the Notice'
            ];
    }
}
?>