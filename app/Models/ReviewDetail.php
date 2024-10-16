<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReviewDetail extends Model
{
    use HasFactory,SoftDeletes;
    protected $table='reviews_detail';

    
    public function reviews_rating(){
        return $this->belongsTo(PropertyListing::class,'property_id');
    }
}
