<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
class WorkingProcess extends Model
{
    protected $fillable= [
        'title'
    ];
    use HasFactory;

    public function image() {
        return $this->morphOne(Image::class, 'parentable');
    }
}
