<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CatalogProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog_product', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('group_id');
            $table->timestamps();
            $table->string('title', 100)->unique();
            $table->text('description');
            $table->string('picture');
            $table->decimal('price');
            $table->boolean('available');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
