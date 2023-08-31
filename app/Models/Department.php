<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{   
    protected $table = 'department'; 
    public function head()
    {   
        return $this->hasOne(User::class, 'id', 'head_id');
    }
    
}