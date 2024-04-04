<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;
    use HasUuids;

    public $incrementing = false; /* because UUID (Universally Unique Identifier)*/

    protected $fillable = [
        'quantity', 'unit_price', 'available_colors', 'available_sizes', 'products_id', 'orders_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'orders_id');
    }
}
