<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_assets', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('product_name');
            $table->string('product_dop');
            $table->string('product_available');
            $table->string('product_total');
            $table->string('product_originalcost');
            $table->string('product_sellingcost');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_assets');
    }
}
