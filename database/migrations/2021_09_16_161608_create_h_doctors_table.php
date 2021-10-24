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
            $table->string('name');
            $table->string('title')->nullable();
            $table->string('role')->default(2);
            $table->string('phone');
            $table->string('attachment')->nullable();
            $table->string('salary');
            $table->double('cost');
            $table->foreignId('dept_id')->references('id')->on('h_departments')->onDelete('cascade');
            $table->foreignId('room_id')->references('id')->on('h_rooms')->onDelete('cascade');
            $table->string('from_date')->nullable();
            $table->string('to_date')->nullable();
            //status means active or disactive
            $table->boolean('status')->default(1);
            // $table->string('shift');
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
