<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tracking_transaksi extends Model
{
    protected $table = "tracking_transaksi";
    protected $fillable = ['transaksi_id','status'];

    public function Transaksi()
    {
    	return $this->belongsTo(Transaksi::class);
    }
}
