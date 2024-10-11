<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MainAminity extends Model
{
    use HasFactory,SoftDeletes;
    protected $cascadeDeletes = ['sub_aminities'];
    protected $fillable = [
        'aminity_name',
        'status'
    ];
}
