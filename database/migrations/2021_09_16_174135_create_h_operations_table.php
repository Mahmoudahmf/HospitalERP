<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_operations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->integer('cost');
            $table->foreignId('patien_id')->references('id')->on('h_patients')->onDelete('cascade');
            $table->foreignId('doctor_id')->references('id')->on('h_doctors')->onDelete('cascade');
            $table->foreignId('dept_id')->references('id')->on('h_departments')->onDelete('cascade');
            $table->foreignId('room_id')->references('id')->on('h_rooms')->onDelete('cascade');
            //Emp register Data
            $table->foreignId('emp_id')->references('id')->on('h_employees');
            $table->string('description');
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
        Schema::dropIfExists('h_operations');
    }
}
