<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory, HasTranslations;

    public $path = 'uploads/blogs';

    protected $table = 'blogs';

    public $translatable = [
        'title',
        'article',
    ];

    protected $fillable = [
        'title',
        'article',
        'image',
        'status',
    ];

    public static $status = ['active', 'desactive'];

    public function getImageAttribute($value)
    {
        return asset($this->path . '/' . $value);
    }
}
