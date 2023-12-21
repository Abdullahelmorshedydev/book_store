<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory, HasTranslations;

    public $path = 'uploads/categories';

    protected $table = 'categories';

    public $translatable = ['name'];

    protected $fillable = [
        'name',
        'image',
        'status',
    ];

    public static $status = ['active', 'desactive'];

    public function getImageAttribute($value)
    {
        if ($value == 'category.jpg') {
            return asset('admin/assets/images/' . $value);
        }
        return asset($this->path . '/' . $value);
    }
}
