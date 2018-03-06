<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchasers', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('sex',[male, female]);
            $table->dateTime('birthdate');
            $table->unsignedInteger('sale_id');
            $table->unsignedInteger('user_id');
            $table->timestamps();

            $table->foreign('sale_id')->references('id')->on('sale')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchasers');
    }
}
