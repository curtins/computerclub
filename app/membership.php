<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class membership extends Model
{
    protected $fillable = ['last_name'];

    protected $table = 'memberships';

    public function attendance()
    {

       return $this->hasMany('App\attendance'); 
    }
    

    public function transaction()
    {

       return $this->hasMany('App\transaction'); 
    }


}
