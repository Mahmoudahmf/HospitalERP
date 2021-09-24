<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nationality_id',14);
            $table->string('phone');
            $table->string('attachment');
            $table->string('title');
            $table->boolean('status')->default(1);
            $table->string('address');
            $table->string('bloodtype');
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
        Schema::dropIfExists('h_patients');
    }
}
