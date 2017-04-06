<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('GVR_NUMBER');
            $table->integer('MEMBERSHIP_ID');
            $table->string('TRAN_TYPE');
            $table->string('TRAN_DESC')->nullable();
            $table->integer('TRAN_AMT');
            $table->datetime('TRAN_DATE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }

    public function membership()
    {

           return $this->belongsTo('App\membership');
    }






}
