<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favorite_colors_and_pattern extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'favorite_colors_and_pattern'
    ];
}
