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
        Schema::table('cart_products', function (Blueprint $table) {
            $table->foreign(['id_cart'], 'cart_products_ibfk_1')->references(['id'])->on('carts');
            $table->foreign(['id_product'], 'cart_products_ibfk_2')->references(['id'])->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cart_products', function (Blueprint $table) {
            $table->dropForeign('cart_products_ibfk_1');
            $table->dropForeign('cart_products_ibfk_2');
        });
    }
};
