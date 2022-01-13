<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRezervationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rezervations', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('user_id');
            $table->integer('product_id');
            $table->string('from_location_id');
            $table->string('to_location_id');
            $table->integer('price');
            $table->string('Airline');
            $table->integer('rezervation_no');
            $table->dateTime('rezervation_date');
            $table->dateTime('rezervation_time');
            $table->dateTime('pickup_time');
            $table->float('total');
            $table->string('status',50)->default('New');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rezervations');
    }
}
