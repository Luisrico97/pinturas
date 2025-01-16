<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->text('description')->nullable();
            $table->string('sizes')->nullable();
            $table->string('colors')->nullable();
            $table->integer('qty')->nullable();
            $table->string('sku')->unique();
            $table->string('image_url')->nullable();
            $table->string('status');
            $table->string('brand');
            $table->integer('categorie_id');
            $table->integer('subcategorie_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};