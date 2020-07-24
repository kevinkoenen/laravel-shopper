<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopper_properties', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');
            $table->string('code')->unique();
            $table->string('sorting_type')->nullable();
            $table->text('description')->nullable();
            $table->text('help_text')->nullable();

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
        Schema::dropIfExists('shopper_properties');
    }
}
