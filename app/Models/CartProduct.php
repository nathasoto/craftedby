<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartProduct extends Model
{
    use HasFactory;
    use HasUuids;

    public $incrementing = false; /* because UUID (Universally Unique Identifier)*/

    protected $fillable = [
        'quantity', 'carts_id', 'products_id',
    ];
    public function cart()
    {
        return $this->belongsTo(Cart::class, 'carts_id');
    }


    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id');
    }
}
