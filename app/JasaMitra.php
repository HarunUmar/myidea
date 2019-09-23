<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JasaMitra extends Model
{
    protected $table = "jasa_mitra";
    protected $fillable = ['mitra_id','sub_kategori_id','nama_jasa','deskripsi'];

 	public function HargaJasa()
 	{
 		return $this->hasMany(HargaJasa::class);
 	}

 	public function GambarJasa()
 	{
 		return $this->hasMany(GambarJasa::class);
 	}

 	public function User()
 	{
 		return $this->belongsToMany(User::class,'transaksi');
 	}

 	public function FeedbackJasaMitraUser()
 	{
 		return $this->belongsToMany(User::class,'feedback_jasa_mitra');
 	}
}
