<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    use HasFactory;
    protected $fillable = [
        'moviename',
        'releasedate',
        'productioncompany',
        'movietime',
        'actor',
        'actress',
        'industry',
    ];
}
