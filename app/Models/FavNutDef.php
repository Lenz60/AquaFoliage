<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavNutDef extends Model
{
    protected $table = "fav_nutdef";
    protected $primaryKey = 'id';

     public $incrementing = false;

     protected $keyType = 'string';

     protected $fillable = [
        'nutdef',
        'user_id'
    ];
    use HasFactory;
}
