<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    public $table = 'orders';

    protected $fillable = [
        'user_id',
        'product_id',
        'label',
        'user_firstname',
        'user_lastname',
        'user_phone',
        'user_address',
        'price',
        'quantity',
        'status_id'
    ];


    public function status(){
        return $this->hasOne(status::class);
    }

    public function user (){

        return $this->belongsTo(user::class);
    }

    public function product(){

        return $this->belongsTo(product::class);
    }
    
}
