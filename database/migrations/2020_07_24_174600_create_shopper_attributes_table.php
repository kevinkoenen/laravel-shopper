<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopper_attributes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');
            $table->string('code')->unique();
            $table->enum('frontend_type', ['select', 'radio', 'text', 'text_area', 'checkbox']);

            $table->boolean('is_filterable')->default(0);
            $table->boolean('is_required')->default(0);

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
        Schema::dropIfExists('shopper_attributes');
    }
}
