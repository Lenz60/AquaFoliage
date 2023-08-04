<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\User;
use App\Models\Plants;


class FavPlant extends Model
{
    protected $table = "fav_plant";
    protected $primaryKey = 'id';

     public $incrementing = false;

     protected $keyType = 'string';

    protected $fillable = [
        'plants_id',
        'user_id'
    ];


    use HasFactory;


}
