<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    public function status(){
        return $this->hasOne(status::class);
    }

    public function user (){

        return $this->belongsTo(user::class);
    }
}
