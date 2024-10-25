<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use HasFactory,SoftDeletes;
    protected $table='gallery';
    protected $fillable = [
        "about_id",
        "image_name",
        "image_order"
    ];
}