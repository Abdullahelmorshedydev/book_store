<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, HasTranslations;
    
    public $path = 'uploads/products';

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
    ];

    public static $status = ['active', 'desactive'];

    public function getImageAttribute($value)
    {
        if ($value == 'product.jpg') {
            return asset('admin/assets/images/' . $value);
        }
        return asset($this->path . '/' . $value);
    }
}
