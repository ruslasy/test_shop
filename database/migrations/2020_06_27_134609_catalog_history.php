<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CatalogHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog_history', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('product_id')->unsigned();
            $table->integer('quantity')->unsigned();
            $table->integer('quantity_old')->unsigned();

            $table->foreign('product_id')->references('id')->on('catalog_product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalog_history');
    }
}
