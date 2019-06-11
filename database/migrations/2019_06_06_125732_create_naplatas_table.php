<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNaplatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('naplatas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_usluge');
            $table->unsignedBigInteger('id_zaposlenog');
            $table->string('datum');
            $table->string('vreme');
            $table->foreign('id_usluge')->references('id')->on('uslugas');
            $table->foreign('id_zaposlenog')->references('id')->on('zaposlenis');
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
        Schema::dropIfExists('naplatas');
    }
}
