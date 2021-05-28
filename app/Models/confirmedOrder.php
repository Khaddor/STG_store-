<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class confirmedOrder extends Model
{
    use HasFactory;
    protected $table = 'confirmed_orders';

    protected $fillable = ['user_id',
                            'label',
                            'user_lastname',
                            'user_address',
                            'user_phone',
                            'quantity',
                            'product_id',
                            'status_id',
                          'user_firstname'];

    public function product(){
        return $this->belongsTo(product::class);
    }

    public function user(){
        return $this->belongsTo(user::class);
    }
    public function status(){
        return $this->belongsTo(status::class);
    }
}
