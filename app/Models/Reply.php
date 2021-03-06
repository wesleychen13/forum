<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $guarded = [];

    public function owner(){
        return $this->belongsTo(User::class,'user_id');
    }
}
