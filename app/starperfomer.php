<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class starperfomer extends Model
{
    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    } 
    
    public function department()
    {
        return $this->belongsTo(Models\Department::class, 'user_id', 'id');
    }
}
