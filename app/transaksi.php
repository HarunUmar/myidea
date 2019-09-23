<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = "transaksi";
    protected $fillable = ['user_id','jasa_mitra_id','harga','promo','lat','long','detail_alamat','pemesan','catatan'];

    public function TrackingTransaksi()
    {
    	return $this->hasMany(TrackingTransaksi::class);
    }

    public function DetailTransaksi()
    {
    	return $this->hasMany(DetailTransaksi::class);
    }
}
