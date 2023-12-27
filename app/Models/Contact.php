<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    protected $fillable = [
        'name',
        'phone',
        'email',
        'reason',
        'message',
    ];

    public static $reason_ar = [
        'استفسار',
        'استبدال',
        'استرجاع',
        'استعجال اوردر',
        'اخري'
    ];

    public static $reason_en = [
        'inquiry',
        'exchange',
        'return',
        'urgent request',
        'other',
    ];
}
