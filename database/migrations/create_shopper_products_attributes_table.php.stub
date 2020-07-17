<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopper_products_attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sku');
            $table->string('ean')->nullable();
            $table->unsignedInteger('stock');
            $table->string('value');

            $table->decimal('weight', 8, 2)->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->decimal('sale_price', 8, 2)->nullable();

            $table->unsignedInteger('product_id');
            $table->unsignedInteger('attribute_id')->after('id');

            $table->foreign('product_id')
                ->references('id')
                ->on('shopper_products');

            $table->foreign('shopper_attribute_id')
                ->references('id')
                ->on('shopper_attributes')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shopper_products_attributes');
    }
}
