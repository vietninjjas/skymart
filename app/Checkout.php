<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;
use App\Product;

class Checkout extends Model
{
    protected $fillable = [
        'order_id',
        'pro_id',
        'quantity',
        'total_price',
    ];

    public function order()
    {
        $this->belongsTo(Order::class, 'order_id');
    }

    public function product()
    {
        $this->belongsTo(Product::class, 'pro_id');
    }

}
