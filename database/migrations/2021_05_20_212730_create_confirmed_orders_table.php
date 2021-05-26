<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfirmedOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confirmed_orders', function (Blueprint $table) {
            $table->id();
            $table->uuid('label');
            $table->foreignId('user_id');
            $table->string('user_firstname');
            $table->string('user_lastname');
            $table->string('user_address');
            $table->string('user_phone');
            $table->integer('quantity');
            $table->foreignId('product_id')->onDelete('cascade');
            $table->foreignId('status_id');   
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
        Schema::dropIfExists('confirmed_orders');
    }
}
