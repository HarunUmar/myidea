<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gambar_jasa extends Model
{
    protected $table = "gambar_jasa";
    protected $fillable = ['jasa_mitra_id','foto','gambar_muka'];

    public function JasaMitra()
    {
    	return $this->belongsTo(JasaMitra::class);
    }
}
