<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_bills', function (Blueprint $table) {
            $table->id();
            $table->string('BillNumber');
            $table->integer('TotalCost');
            $table->foreignId('Patien_id')->references('id')->on('h_patients')->onDelete('cascade');
            $table->foreignId('Operation_id')->references('id')->on('h_operations')->onDelete('cascade');
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
        Schema::dropIfExists('h_bills');
    }
}
