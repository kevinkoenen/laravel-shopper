<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSocialiteToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('users')) {
            return;
        }

        Schema::table('users', function(Blueprint $table) {
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(!Schema::hasTable('users')) {
            return;
        }

        Schema::table('users', function(Blueprint $table) {
            $table->dropColumn(['provider', 'provider_id']);
        });
    }
}
