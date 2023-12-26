<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'products';

    public $translatable = ['name'];

    protected $fillable = [
        'name',
        'image',
        'author',
        'pages',
        'quantity',
        'price',
        'offer_price',
        'status',
        'description',
        'sales_count',
        'category_id',
    ];

    public static $status = ['active', 'desactive'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function favourites()
    {
        return $this->hasMay(Favourite::class);
    }
}
