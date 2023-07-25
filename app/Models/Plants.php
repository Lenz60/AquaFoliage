<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plants extends Model
{
    protected $table = "plants";
    protected $primaryKey = 'id';

     public $incrementing = false;

     protected $keyType = 'string';
    use HasFactory;
}
