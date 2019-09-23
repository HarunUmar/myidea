<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_transaksi extends Model
{
    protected $table = "detail_transaksi";
    protected $fillable = ['transaksi_id','catatan','harga'];

    public function Transaksi(){
    	return $this->belongsTo(Transaksi::class);
    }
}
