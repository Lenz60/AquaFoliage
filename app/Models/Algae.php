<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Algae extends Model
{
    use HasFactory;
    protected $table = "algae";
    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'name',
        'species',
        'common_name',
        'difficulty',
        'causes',
        'excerpt',
        'causes_desc',
        'body',
    ];
    
    public function fav_Algae(){
        return $this->hasMany(FavAlgae::class);
    }
}
