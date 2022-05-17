<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'libelle',
        'file_path',
        'type',
        'product_id',
        'user_id',
        'category_id',
        'rayon_id',
    ];
}