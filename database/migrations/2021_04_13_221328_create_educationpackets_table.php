<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationpacketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educationpackets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order')->unique();
            $table->integer('packet_id')->unique();

            $table->string('menu_slug');
            $table->string('url');

            $table->string('packet_name');
            $table->integer('packet_price');
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
        Schema::dropIfExists('educationpackets');
    }
}
