<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    protected $table = "mitra";
    protected $fillable = ['user_id','nama_mitra','gambar','deskripsi','alamat','lat','long','status_aktif','diverifikasi_oleh','tgl_verifikasi','bank','norek'];

    public function User()
    {
    	return $this->belongsTo(User::class);
    }

    public function FeedbackMitraUser()
    {
    	return $this->belongsTomany(User::class,'feedback_mitra');
    }
}
