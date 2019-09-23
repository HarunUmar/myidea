<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMitra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitra', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('nama_mitra');
            $table->string('gambar');
            $table->string('deskripsi');
            $table->string('alamat');
            $table->string('lat');
            $table->string('long');
            $table->enum('status_aktif',['0','1','2'])->default('1'); // 0 tidak aktif, 1 menunggu verifikasi, 2 = aktif
            $table->string('deiverifikasi_oleh')->nullable();
            $table->datetime('tgl_verifikasi')->nullable();
            $table->string('bank')->nullable();
            $table->string('norek')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mitra');
    }
}
