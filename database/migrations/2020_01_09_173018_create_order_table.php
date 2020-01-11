<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('user_name')->nullable()->comment('user  name who place the order');
            $table->string('address')->nullable()->comment('0-> web');
            $table->string('pizza_type')->nullable()->comment('type of pizza (veg/nonveg)');
            $table->string('pizza_name')->nullable()->comment('pizza name');
            $table->string('size')->nullable()->comment('size of pizza( regular/medium/large )');
            $table->integer('quantity')->nullable()->comment('quantity of pizza (1,2...)');
            $table->time('delivery_time')->nullable()->comment('pizza delivery time');
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
        Schema::dropIfExists('order');
    }
}
