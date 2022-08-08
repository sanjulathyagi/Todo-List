<?php

namespace App\Models;

use App\Models\category;
use App\Models\productCategory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'intro',
        'category_id',

    ];

    // public function category()
    // {
    //     return $this->hasOne(category::class, 'id', 'category_id');
    // }

    // public function category()
    // {
    //     return $this->belongsTo(category::class, 'category_id', 'id');
    // }

    public function categories()
    {
        return $this->belongsToMany(category::class, 'productCategory::class', 'product_id', 'category_id');
    }
}
