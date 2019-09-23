<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubKategoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_kategori', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('kategori_id');
            $table->string('sub_kategori');
            $table->string('route');
            $table->string('icon')->nullable();
            $table->enum('status_aktif',['0','1'])->default('1');
            $table->enum('satuan',['0','1'])->default('0'); //0 tidak perlu satuan, 1 perlu satuan
            $table->foreign('kategori_id')->on('kategori')->references('id')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('sub_kategori');
    }
}
