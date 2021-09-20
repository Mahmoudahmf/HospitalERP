<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHNursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_nurses', function (Blueprint $table) {
            $table->id();
            $table->string('UserName')->unique();
            $table->string('Password',8);
            $table->string('Name');
            $table->string('Role');
            $table->string('Phone');
            $table->string('Attachment')->nullable();
            $table->string('Title');
            $table->string('Salary');
            $table->foreignId('Dept_id')->references('id')->on('h_departments')->onDelete('cascade');
            $table->boolean('Status')->default(1);
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
        Schema::dropIfExists('h_nurses');
    }
}
