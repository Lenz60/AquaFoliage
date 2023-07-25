<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NutrientDeficiencies extends Model
{
    protected $table = "nutrient_deficiencies";
    protected $primaryKey = 'id';

     public $incrementing = false;

     protected $keyType = 'string';
    use HasFactory;
}
