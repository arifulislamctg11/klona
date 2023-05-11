<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class interest extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'interest'
    ];

}
