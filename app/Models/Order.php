<?php

namespace App\Models;


use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
public function items()
{
    return $this->belongsToMany(Product::class, 'order_items','order_id','product_id');
}
}
