<?php
/**
 * Created by PhpStorm.
 * User: robert
 * Date: 06.10.2018
 * Time: 23:16
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLifetimeIdsTable extends Migration
{
    public function up() {
        Schema::create('dp_user_lifetime_ids', function(Blueprint $table) {
            $table->increments('id');

            // todo not sure if this should or should not be unique; if yes, then we can have only one userLifetimeID
            // which should be fine
            $table->string('email')->unique();
            $table->string('name');
            $table->string('prefix', 2);
            $table->string('remarks');
            $table->string('user_lifetime_id');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('dp_user_lifetime_ids');
    }
}