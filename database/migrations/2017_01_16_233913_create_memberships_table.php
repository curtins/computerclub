<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('memberships', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('GVR_NUMBER')  ;
          $table->string('LAST_NAME')->nullable  ;
          $table->string('FIRST_NAME')->nullable  ;
          $table->datetime('EXPIRE_DATE')->nullable;
          $table->string('PROPERTY_ADDRESS')->nullable  ;
          $table->string('MAILING_ZIP')->nullable  ;
          $table->string('TELEPHONE')->nullable  ;
          $table->string('email', 250)->nullable;
          $table->string('EMAIL_OPT')->nullable  ;
          $table->string('MEMBERSHIP_TYPE')->nullable  ;
          $table->datetime('JOINED_CLUB')->nullable;
          $table->string('COMPUTER_TYPE')->nullable  ;
          $table->string('MONITOR')->nullable  ;
          $table->string('INSTRUCT')->nullable  ;
          $table->datetime('DATE_CHANGED')->nullable;
          $table->string('ACTIVE')->nullable ;
          $table->integer('PRIMARY_MEMBER')->nullable ;
          $table->timestamps();
          
         
        });
    }


    public function transaction()
    {

           return $this->hasMany('App\transaction');
    }

    public function attendance()
    {

           return $this->hasMany('App\attendance');
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memberships');
    }
}
