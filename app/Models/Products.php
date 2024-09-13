<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'species',
        'about_fold',
        'below_fold',
        'link',
        'files',
        'video',
        'copy'
    ];
    protected $casts = [
        'files' => 'array',  // Si 'files' es un array en el JSON
    ];
}
