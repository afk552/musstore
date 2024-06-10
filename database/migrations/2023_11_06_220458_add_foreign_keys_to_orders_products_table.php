<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders_products', function (Blueprint $table) {
            $table->foreign(['id_order'], 'orders_products_ibfk_1')->references(['id'])->on('orders');
            $table->foreign(['id_product'], 'orders_products_ibfk_2')->references(['id'])->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders_products', function (Blueprint $table) {
            $table->dropForeign('orders_products_ibfk_1');
            $table->dropForeign('orders_products_ibfk_2');
        });
    }
};
