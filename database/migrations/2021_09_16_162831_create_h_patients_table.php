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
            $table->string('Name');
            $table->string('Nationality_Id',14);
            $table->string('Phone');
            $table->string('Attachment');
            $table->string('Title');
            $table->boolean('Status')->default(1);
            $table->string('Address');
            $table->string('BloodType');
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
        Schema::dropIfExists('h_patients');
    }
}
