<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavAlgae extends Model
{
    protected $table = "fav_algae";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'algae_id',
        'user_id'
    ];

     public $incrementing = false;

     protected $keyType = 'string';
    use HasFactory;
}
