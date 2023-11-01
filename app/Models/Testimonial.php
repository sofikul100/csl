<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
class Testimonial extends Model
{
    protected $fillable = [
        'client_name',
        'email',
        'contact',
        'designation',
        'quote'
    ];
    use HasFactory;

    public function image() {
        return $this->morphOne(Image::class, 'parentable');
    }

    public function images() {
        return $this->morphMany(Image::class, 'parentable');
    }
}
