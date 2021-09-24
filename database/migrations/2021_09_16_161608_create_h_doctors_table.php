<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_doctors', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('title')->nullable();
            $table->string('name');
            $table->string('role');
            $table->string('phone');
            $table->string('attachment')->nullable();
            $table->string('salary');
            $table->foreignId('dept_id')->references('id')->on('h_departments')->onDelete('cascade');
            $table->foreignId('room_id')->references('id')->on('h_rooms')->onDelete('cascade');
          //status means active or disactive
            $table->boolean('status')->default(1);
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('h_doctors');
    }
}
