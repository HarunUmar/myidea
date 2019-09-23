<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGambarJasa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gambar_jasa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('jasa_mitra_id');
            $table->string('foto');
            $table->enum('gambar_muka',['0','1']);
            $table->foreign('jasa_mitra_id')->on('jasa_mitra')->references('id')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('gambar_jasa');
    }
}
