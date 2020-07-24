<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopper_property_values', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('shopper_property_id');
            $table->string('value');

            $table->foreign('shopper_property_id')
                ->references('id')
                ->on('shopper_properties');

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
        Schema::dropIfExists('shopper_property_values');
    }
}
