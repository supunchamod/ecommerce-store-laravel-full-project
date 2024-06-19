<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;


class Categery extends Model
{
    use HasFactory;

    protected $table = 'category';
    protected $fillable = ['name', 'image','slug'];

    public function products()
    {
        return $this->hasMany(Product::class, 'cat_id');
    }


}
