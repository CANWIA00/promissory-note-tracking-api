<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSenetlerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('senetler', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('musteri');
            $table->integer('vade_sayisi');
            $table->integer('odenen_vadeler');
            $table->integer('kalan_vadeler');
            $table->string('filitreleme');

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
        Schema::dropIfExists('senetler');
    }
}
