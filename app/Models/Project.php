<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categorie;
class Project extends Model
{
    protected $fillable = [
        'name',
        'content',
        'start_date',
        'end_date'
    ];
    use HasFactory;
 
    public function image() {
        return $this->morphOne(Image::class, 'parentable');
    }

    public function categorie(){
        return $this->belongsTo(Categorie::class,'category_id');
    }
}
