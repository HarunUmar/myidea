<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','level_id','jenkel'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Level()
    {
        return $this->belongsTo(Level::class);
    }

    public function Mitra()
    {
        return $this->hasOne(Mitra::class);
    }

    public function JasaMitra()
    {
        return $this->belongsToMany(JasaMitra::class,'transaksi');
    }

    public function FeedbackUserMitra()
    {
        return $this->belongsToMany(Mitra::class,'feedback_mitra');
    }

    public function FeedbackUserJasaMitra()
    {
        return $this->belongsToMany(JasaMitra::class,'feedback_jasa_mitra');
    }
}
