<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('GVR_NUMBER');
            $table->integer('MEMBERSHIP_ID')->unsigned;
            $table->datetime('DATE_ATTENDED');
            $table->string('ACTIVE');
            $table->timestamps();
        });
    }
    
    public function membership()
    {

           return $this->belongsTo('App\membership');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendances');
    }
}
