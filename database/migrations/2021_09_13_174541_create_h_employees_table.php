<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_employees', function (Blueprint $table) {
            $table->id();
            $table->string('UserName')->unique();
            $table->string('Password',8);
            $table->string('Name');
            $table->string('Role');
            $table->string('Phone');
            $table->string('Attachment')->nullable();
            $table->string('Title');
            //status means active or disactive
            $table->boolean('Status')->default(1);
            $table->string('Salary');
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
        Schema::dropIfExists('h_employees');
    }
}
