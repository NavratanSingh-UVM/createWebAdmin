<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutDetails extends Model
{
    use HasFactory;
    protected $table='about_details';
    protected $fillable = [
        'id'
    ];
    public function aboutUs_gallery_image() {
        return $this->hasMany(Gallery::class,'about_id')->orderBy('image_order', 'ASC');
    }
}
