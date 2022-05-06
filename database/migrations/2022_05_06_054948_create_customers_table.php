<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('f_name');
            $table->string('s_name');
            $table->string('t_name');
            $table->string('cust_contry');
            $table->string('phone');
            $table->string('email');
            $table->string('password');
            $table->string('status')->default(0);
            $table->string('ip_address');
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
        Schema::dropIfExists('customers');
    }
}
