<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieImage extends Model
{
    use HasFactory;
     protected $table = 'movie_images';

     protected $fillable = [
         'movie_id',
         'image_path'
     ];
 
     public function movie()
     {
         return $this->belongsTo(Movie::class);
     }
}
