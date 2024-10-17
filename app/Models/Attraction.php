<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Attraction extends Model
{
    use HasFactory;
    protected $table='attraction_area';
    protected $fillable = [
        'id'
    ];
}
