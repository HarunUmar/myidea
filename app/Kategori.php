<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "kategori";
    protected $fillable = ['kategori','route','icon','status_aktif'];

    public function SubKategori()
    {
    	return $this->hasMany(SubKategori::class);
    }
}
