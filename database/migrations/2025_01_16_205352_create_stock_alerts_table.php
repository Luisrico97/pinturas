<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockAlertsTable extends Migration
{
    public function up()
    {
        Schema::create('stock_alerts', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->string('alert_type');
            $table->integer('qty_threshold');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stock_alerts');
    }
};