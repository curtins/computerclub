<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attendance extends Model
{

    protected $table = 'attendances';


    protected $fillable = [
        'GVR_NUMBER', 'MEMBERSHIP_ID', 'DATE_ATTENDED','ACTIVE'
    ];


    







}
