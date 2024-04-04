<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use HasUuids;

    public $incrementing = false; /* because UUID (Universally Unique Identifier)*/
    protected $fillable = [
        'name', 'price', 'weight', 'stock', 'material', 'history_anécdota', 'image_path', 'description', 'categories_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }
}
