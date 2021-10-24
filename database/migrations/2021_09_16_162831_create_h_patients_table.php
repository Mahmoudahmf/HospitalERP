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
            $table->string('attachment')->nullable();
            $table->string('title')->nullable();
            $table->boolean('status')->default(1);
            $table->string('address')->nullable();
            $table->string('bloodtype')->nullable();
            $table->string('description')->nullable();
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
