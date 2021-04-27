<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->string('name');
            $table->string('last');
            $table->text('verification_code');
            $table->string('email')->unique();
            $table->bigInteger('phone')->unique();
            $table->string('password');
            $table->string('city');
            $table->string('address');
            $table->boolean('is_verify')->default(0);

            $table->boolean('tyt')->nullable()->default(0);
            $table->boolean('ayt')->nullable()->default(0);

            $table->boolean('yks')->nullable()->default(0);
            $table->boolean('orta_ogretim')->nullable()->default(0);

            $table->boolean('orta_okul')->nullable()->default(0);
            $table->boolean('yks_dil')->nullable()->default(0);
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
        Schema::dropIfExists('users');
    }
}
