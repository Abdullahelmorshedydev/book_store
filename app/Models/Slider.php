<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    public $path = 'uploads/sliders';

    protected $table = 'sliders';

    protected $fillable = ['image'];

    public static $status = ['active', 'desactive'];

    public function getImageAttribute($value)
    {
        if ($value == 'slider.jpg') {
            return asset('admin/assets/images/' . $value);
        }
        return asset($this->path . '/' . $value);
    }
}
