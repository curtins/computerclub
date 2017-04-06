<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{

    protected $table = 'transactions';



    protected $fillable = [
        'GVR_NUMBER', 'MEMBERSHIP_ID', 'TRAN_AMT','TRAN_DATE','TRAN_TYPE'
    ];


   

}
