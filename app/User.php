<?php

namespace App;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Project;
use App\Models\UserRole;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function employee()
    {
        return $this->hasOne(Employee::class, 'user_id', 'id');
    }
    public function department()
    {
        return $this->hasOne(Department::class, 'id', 'id');
    }
    public function role()
    {
        return $this->hasOne('App\Models\UserRole', 'user_id', 'id');
    }

    public function isHR()
    {
        $userId = Auth::user()->id;
        $userRole = UserRole::where('user_id', $userId)->first();
        if($userRole->role_id == 7 || $userRole->role_id == 1)
        {
            return true;
        }
        return false;
    }

    public function notAnalyst()
    {
        $userId = Auth::user()->id;
        $userRole = UserRole::where('user_id', $userId)->first();
        if($userRole->role_id != 3)
        {
            return true;
        }
        return false;
    }

    public function isCoordinator()
    {
        $userId = Auth::user()->id;
        $userRole = UserRole::where('user_id', $userId)->first();
        $roleIds = [2,5,7,8,9,10,14,16];
        if(in_array($userRole->role_id, $roleIds) )
        {
            return true;
        }
        return false;
    }
    
    public function isCEO(){
        
        $userId = Auth::user()->id;
        $userRole = UserRole::where('user_id',$userId)->first();
        $rolesId =[17,18]; 
        if(in_array($userRole->role_id,$rolesId)){
            return true;
        }
        return false;
    }

    public function isManager()
    {
        $userId = Auth::user()->id;
        $userRole = UserRole::where('user_id', $userId)->first();
        if($userRole->role_id == 16)
        {
            return true;
        }
        return false;
    }
    public function isteamLaad()
    {
        $userId = Auth::user()->id;
        $userRole = UserRole::where('user_id', $userId)->first();
        if($userRole->role_id == 5)
        {
            return true;
        }
        return false;
    }
    public function project()
    {
        return $this->hasMany(Project::class);
    }
    
    public function isTicketHead()
    {
        $userId = Auth::user()->id;
        $DepartHead = Department::where('head_id',$userId)->first();
        $ticketDepart = Department::where('comp_status',1)->get();
       
        $items = array();
        foreach($ticketDepart as $value){
             $items[] = $value->head_id;
        }
        
        if($DepartHead != ''){
           
        if(in_array($DepartHead->head_id, $items)){
            
            return true;
        }
        }
         return false;
    }
    
}
