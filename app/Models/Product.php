<?php

namespace App\Models;

use App\Casts\MoneyCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $casts = [
        'is_active' => 'boolean',
        'price' => MoneyCast::class,
    ];

    public function getTitleAttribute($value)
    {
        return Str::title($value);
    }

//    public function setPriceAttribute($value)
//    {
//        $this->attributes['price'] = $value * 100;
//    }
}
