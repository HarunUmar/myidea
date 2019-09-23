<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedbackMitra extends Model
{
    protected $table = "feedback_mitra";
    protected $fillable = ['user_id','mitra_id','rating','catatan'];
}
