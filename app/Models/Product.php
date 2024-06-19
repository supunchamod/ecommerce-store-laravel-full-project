<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categery;


class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $fillable = [
        'productName',
        'productPrice',
        'productOldPrice',
        'productDescription',
        'mainImage',
        'subImages',
        'slug',
        'productSize',
        'productColor',
        'condition',
        'slug',
        'stock',
        'cat_id',
        'status',
        'discount',
    ];

    public function category()
    {
        return $this->belongsTo(Categery::class, 'cat_id');
    }

    protected $casts = [
        'subImages' => 'array',
    ];

}
