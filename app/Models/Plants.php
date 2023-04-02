<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plants extends Model
{

    protected $fillable = [
        'name',
        'genus',
        'species',
        'common_name',
        'difficulty',
        'light',
        'temp',
        'usage',
        'excerpt',
        'body',
    ];
    use HasFactory;
}
