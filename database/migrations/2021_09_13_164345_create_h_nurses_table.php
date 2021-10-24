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
            $table->string('username')->unique();
            $table->string('password');
            $table->string('name');
            $table->string('role');
            $table->string('phone');
            $table->string('attachment')->nullable();
            $table->string('title');
            $table->string('salary');
            $table->foreignId('dept_id')->references('id')->on('h_departments')->onDelete('cascade');
            $table->string('from_date')->nullable();
            $table->string('to_date')->nullable();
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
        Schema::dropIfExists('h_nurses');
    }
}
