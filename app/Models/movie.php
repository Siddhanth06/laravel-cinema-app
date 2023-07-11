<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'overview',
        'poster_path',
        'release_date',
        'vote_average',
        'runtime',
        'budget',
        'popularity',
        'homepage'
    ];
}
