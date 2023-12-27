<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'phone',
        'email',
        'notes',
        'cart_id',
        'status',
    ];

    public static $status = [
        'pending',
        'proccessing',
        'completed',
        'canceled',
    ];

    public function cart()
    {
        return $this->hasOne(Cart::class);
    }
}
