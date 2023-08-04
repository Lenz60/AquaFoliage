<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class NutrientDeficiencies extends Model
{
    use HasFactory;
    protected $table = "nutrient_deficiencies";
    protected $primaryKey = 'id';

     public $incrementing = false;

     protected $keyType = 'string';

     protected $fillable = [
        'id',
        'name',
        'difficulty',
        'causes',
        'excerpt',
        'causes_desc',
        'body',
    ];

     public function fav_NutDef(){
        return $this->hasMany(FavNutDef::class);
    }
}
