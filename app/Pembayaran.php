<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = "Pembayaran";
    protected $fillable = ['transaksi_id','jenis_bayar','nominal','via'];

    public function Transaksi()
    {
    	return $this->belongsTo(Transaksi::class);
    }
}
