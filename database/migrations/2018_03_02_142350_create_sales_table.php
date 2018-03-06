<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date');
            $table->time('time');
            $table->double('totalprice');
            $table->unsignedInteger('employer_id');
            $table->unsignedInteger('purchaser_id');
            $table->timestamps();

            $table->foreign('employer_id')->references('id')->on('employers');
            $table->foreign('purchaser_id')->references('id')->on('purchasers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
