<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id()->autoIncrement();;
            $table->foreignIdFor(\App\Models\Product::class,'product_id')
            ->constrained('products');
            $table->foreignIdFor(User::class,'user_id')
                ->constrained('users');
            $table->enum('type',['city','airport']);
            $table->string('time');
            $table->string('from_location')->nullable();
            $table->string('to_location')->nullable();
            $table->integer('lat_location')->nullable();
            $table->integer('long_location')->nullable();
            $table->integer('lat1_location')->nullable();
            $table->integer('long1_location')->nullable();
            $table->string('status')->nullable()->default('False');
            $table->float('total_price');
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
        Schema::dropIfExists('locations');
    }
}
