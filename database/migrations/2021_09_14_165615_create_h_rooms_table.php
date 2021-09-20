<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_rooms', function (Blueprint $table) {
            $table->id();
            $table->string('RoomNumber');
            $table->string('Druation');
            //Status means here Room Avilable Or Not
            $table->boolean('Status')->default(1);
            $table->foreignId('Nurse_Id')->references('id')->on('h_nurses')->onDelete('cascade');
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
        Schema::dropIfExists('h_rooms');
    }
}
