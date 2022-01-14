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
                $table->string('name',20);
                $table->string('email',50);
                $table->string('phone',20);
                $table->integer('product_id');
                $table->integer('from_location_id_id');
                $table->integer('to_location_id_id');
                $table->float('total_price_id');
                $table->string('airline');
                $table->integer('rezervation_no');
                $table->dateTime('rezervation_date');
                $table->dateTime('rezervation_time');
                $table->dateTime('pickup_time');
                $table->string('note',150)->nullable();
                $table->string('IP',20);
                $table->string('status',50)->default('New');
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
        Schema::dropIfExists('rezervations');
    }
}
