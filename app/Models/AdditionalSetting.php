<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditionalSetting extends Model
{
    use HasFactory;
    protected $table='front_attraction';
    protected $fillable = [
        'id',
        'admin_id'
    ];
}
