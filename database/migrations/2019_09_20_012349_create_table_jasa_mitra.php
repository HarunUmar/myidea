<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableJasaMitra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jasa_mitra', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('mitra_id');
            $table->unsignedBigInteger('sub_kategori_id');
            $table->string('nama_jasa');
            $table->string('deskripsi');
            $table->enum('status_aktif',['0','1'])->default('1');
            $table->timestamps();
            $table->foreign('mitra_id')->on('mitra')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sub_kategori_id')->on('sub_kategori')->references('id')->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jasa_mitra');
    }
}
