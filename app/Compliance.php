<?php

namespace App;

use App\Models\Department;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Compliance extends Model
{
    //
    protected $table = 'compliance';
    
    public function department()
    {   
        return $this->belongsTo(Department::class,  'DeptId','id');
    }
    
    public function users()
    {   
        return $this->belongsTo(User::class,  'sender_id','id');
    }
}
