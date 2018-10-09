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
    public function up()
    {
        Schema::create('dp_user_lifetime_ids', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email_normalized')->unique();
            $table->string('email', 255);
            $table->string('name');
            $table->string('prefix', 2)->nullable();
            $table->string('remarks')->nullable();
            $table->string('user_lifetime_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dp_user_lifetime_ids');
    }
}
