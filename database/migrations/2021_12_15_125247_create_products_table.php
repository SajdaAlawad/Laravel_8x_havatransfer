<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.php
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {

            $table->id()->autoIncrement();
            $table->string('title',150);
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('image',75)->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('Ticket_type')->nullable();
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->float('price_ticket')->nullable();
            $table->float('price_km')->nullable();
            $table->integer('aicraft_type_capacity')->default('18');
            $table->text('detail')->nullable();
            $table->string('slug',5)->nullable();
            $table->string('status')->nullable()->default('False');
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
        Schema::dropIfExists('products');
    }
}