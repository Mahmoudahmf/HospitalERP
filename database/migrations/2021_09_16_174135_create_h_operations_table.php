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
            $table->string('Name');
            $table->string('Type');
            $table->integer('Cost');
            $table->foreignId('Patien_id')->references('id')->on('h_patients')->onDelete('cascade');
            $table->foreignId('Doctor_id')->references('id')->on('h_doctors')->onDelete('cascade');
            $table->foreignId('Dept_id')->references('id')->on('h_departments')->onDelete('cascade');
            $table->foreignId('Room_id')->references('id')->on('h_rooms')->onDelete('cascade');
            //Emp register Data
            $table->foreignId('Emp_id')->references('id')->on('h_employees');
            $table->string('Description');
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
