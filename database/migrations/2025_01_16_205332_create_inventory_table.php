<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryTable extends Migration
{
    public function up()
    {
        Schema::create('inventory', function (Blueprint $table) {
            $table->id();
            $table->integer('qty_available')->nullable();
            $table->integer('qty_reserved')->nullable();
            $table->integer('qty_sold')->nullable();
            $table->integer('min_stock')->nullable();
            $table->integer('product_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inventory');
    }
};
