<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();

            $table->date('appointmentDate');
            $table->time('appointmentTime');

            //default appointmentStatus to pending
            $table->enum('appointmentStatus',[0,1,2])->default(0);
            $table->timestamps();
            $table->unsignedBigInteger('userID');
            $table->foreign('userID')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('appointments');
    }
};
