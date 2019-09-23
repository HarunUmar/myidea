<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedbackJasaMitra extends Model
{
    protected $table = "feedback_jasa_mitra";
    protected $fillable = ['user_id','jasa_mitra_id','rating','catatan'];
}
