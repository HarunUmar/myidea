<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class harga_jasa extends Model
{
    protected $table = 'harga_jasa';
    protected $fillable = ['jasa_mitra_id','keterangan','harga'];

    public function JasaMitra()
    {
    	return $this->belongsTo(JasaMitra::class);
    }
}
