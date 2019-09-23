<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNotifikasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifikasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pengirim_id');
            $table->integer('penerima_id');
            $table->integer('judul_id');
            $table->text('judul');
            $table->text('isi');
            $table->enum('jenis_notif',['1','2','3']);
            //1 = transaksi
            //2 = promo
            //3 = bukpay
            $table->enum('dibaca',['0','1']);
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
        Schema::dropIfExists('notifikasi');
    }
}
