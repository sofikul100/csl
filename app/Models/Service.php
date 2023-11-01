<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
class Service extends Model
{
    
    use HasFactory;

    public function image() {
        return $this->morphOne(Image::class, 'parentable');
    }

    public function images() {
        return $this->morphMany(Image::class, 'parentable');
    }
}
