<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    use HasUuids;

    public $incrementing = false; /* because UUID (Universally Unique Identifier)*/

    protected $fillable = [
        'name', 'history', 'production_methods', 'specialties', 'zip_code', 'description', 'users_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

}
