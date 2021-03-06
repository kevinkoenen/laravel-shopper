<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopper_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('brand_id');
            $table->string('sku');
            $table->string('ean')->nullable();
            $table->string('name');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->string('index_label')->nullable();
            $table->unsignedInteger('stock');

            $table->decimal('weight', 8, 2)->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->decimal('sale_price', 8, 2)->nullable();
            $table->decimal('purchase_price', 8, 2)->nullable();

            $table->boolean('buyable')->default(1);
            $table->boolean('featured')->default(0);

            $table->string('relatable_sort')->nullable();
            $table->string('upsellable_sort')->nullable();

            $table->softDeletes();

            $table->index(['brand_id']);
            $table->foreign('brand_id')
                ->references('id')
                ->on('brands')
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
        Schema::dropIfExists('shopper_products');
    }
}
