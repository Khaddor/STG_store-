<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
             'name' ,
             'label',
            'price',
            'image' ,
            'reduction',
            'inStock',
            'description',
            'category_id' ,
    ];
    public function category(){

        
        return $this->belongsTo(category::class); 
    }

    public function orders(){

        return $this->hasMany(order::class);
    }

    public function confirmedOrders(){
        return $this->hasMany(confirmedOrder::class);
    }
    
}
