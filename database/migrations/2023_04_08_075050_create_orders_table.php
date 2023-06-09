<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->bigInteger('detail_orders_id')->unsigned()->index();
            $table->string('name');
            $table->string('surname');
            $table->string('email');
            $table->string('phone');
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('detail_orders_id')->references('id')->on('detail_orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
