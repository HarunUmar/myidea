<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHargaJasa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harga_jasa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('jasa_mitra_id');
            $table->string('keterangan');
            $table->integer('harga');
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
        Schema::dropIfExists('harga_jasa');
    }
}
