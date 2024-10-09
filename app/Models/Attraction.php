<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Attraction extends Model
{
    use HasFactory;
    protected $table='front_attraction';
    protected $fillable = [
        'id',
        'admin_id'
    ];
    public function propertyName() {
        return $this->belongsTo(PropertyListing::class,'property_id','id');
    }
}
