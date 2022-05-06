<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_travels', function (Blueprint $table) {
            $table->id();
            $table->integer('cust_id');
            $table->timestampTz('tr_date', $precision = 0);
            $table->integer('status');
            $table->date('tra_date');
            $table->timeTz('tra_time', $precision = 0);
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
        Schema::dropIfExists('request_travels');
    }
}
