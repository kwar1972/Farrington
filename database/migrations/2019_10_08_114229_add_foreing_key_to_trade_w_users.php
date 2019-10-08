<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeingKeyToTradeWUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trades', function (Blueprint $table) {
           
            $table->foreign('userid')->references('id')->on('users')->onDelete("CASCADE")->onUpdate("NO ACTION");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trades', function (Blueprint $table) {
            $table->foreign('userid')->references('id')->on('users')->onDelete("CASCADE")->onUpdate("NO ACTION");
        });
    }
}
