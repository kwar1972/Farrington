<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTrades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // public function up()
    // {
    //     Schema::create('trades', function (Blueprint $table) {
    //         $table->increments('id');
    //         $table->biginteger('userid',20);
    //         $table->string('bankname');
    //         $table->string('country');
    //         $table->string('accid');
    //         $table->string('account');
    //         $table->string('accname');
    //         $table->string('swift');
    //         $table->string('iban');
    //         $table->date('sent_at');
    //         $table->date('purchased_at');
    //         $table->timestamps();
    //         $table->foreign('userid')->references('id')->on('users')->onDelete("CASCADE")->onUpdate("NO ACTION");
    //     });
    // }

    // /**
    //  * Reverse the migrations.
    //  *
    //  * @return void
    //  */
    // public function down()
    // {
    //     Schema::dropIfExists('trades');
    // }
}
