<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;

class Invoice extends Model
{
   public function department(){
       return $this->belongsTo(Department::class, 'employee_depart','id');
   }
}
