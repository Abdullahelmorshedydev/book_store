<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Branch extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'branches';

    public $translatable = [
        'name',
        'address',
    ];

    protected $fillable = [
        'name',
        'address',
        'status',
    ];

    public static $status = ['active', 'desactive'];
}
