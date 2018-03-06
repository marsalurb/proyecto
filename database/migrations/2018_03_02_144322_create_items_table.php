<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->double('price');
            $table->string('model');
            $table->string('brand');
            $table->integer('guarantee')->default(12);
            $table->unsignedInteger('linesale_id');
            $table->unsignedInteger('supplier_id');
            $table->timestamps();

            $table->foreign('linesale_id')->references('id')->on('linesale')->onDelete('cascade');
            $table->foreign('supplier_id')->references('id')->on('supplier')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
