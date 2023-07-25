<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Algae extends Model
{
    protected $table = "algae";
    protected $primaryKey = 'id';

     public $incrementing = false;

     protected $keyType = 'string';
    use HasFactory;
}
