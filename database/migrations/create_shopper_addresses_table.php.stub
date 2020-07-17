<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopper_addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('address');
            $table->string('address2')->nullable();
            $table->string('district');
            $table->string('city');
            $table->string('postal_code');
            $table->string('country_code');
            $table->enum('type', ['billing', 'delivery']);

            $table->unsignedBigInteger('user_id')->index();

            $table->morphs('addressable');

            $table->timestamps();

            $table->index(['user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shopper_addresses');
    }
}
