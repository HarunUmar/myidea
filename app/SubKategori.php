<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubKategori extends Model
{
    protected $table = "sub_kategori";
    protected $fillable = ['kategori_id','sub_kategori','route','icon','status_aktif','satuan'];

    public function Kategori(){
    	return $this->belongsTo(Kategori::class);
    }
}
