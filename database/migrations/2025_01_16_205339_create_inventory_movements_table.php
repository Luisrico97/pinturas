<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryMovementsTable extends Migration
{
    public function up()
    {
        Schema::create('inventory_movements', function (Blueprint $table) {
            $table->id();
            $table->string('movement_type');
            $table->integer('qty');
            $table->integer('product_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inventory_movements');
    }
};