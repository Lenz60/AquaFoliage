<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\FavAlgae;
use App\Models\FavNutDef;
use App\Models\FavPlant;

class Plants extends Model
{
    use HasFactory;
    protected $table = "plants";
    protected $primaryKey = "id";

    public $incrementing = false;

    protected $keyType = "string";

    protected $fillable = [
        'id',
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

    public function fav_Plant(){
        return $this->hasMany(FavPlant::class);
    }
}
