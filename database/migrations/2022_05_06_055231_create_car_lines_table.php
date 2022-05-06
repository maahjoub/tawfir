<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_lines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('li_car')->references('id')->on('cars')->onDelete('cascade');
            $table->foreignId('from')->references('id')->on('cities')->onDelete('cascade');
            $table->foreignId('to')->references('id')->on('cities')->onDelete('cascade');
            $table->integer('mony');
            $table->integer('user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_lines');
    }
}
