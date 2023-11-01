<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Designation;
class Team extends Model
{
    protected $fillable =[
        'name',
        'designation_id',
        'facebook_url',
        'twitter_url',
        'instagram_url',
        'linkedin_url',
        'pinterest_url',
    ];
    use HasFactory;

    public function getNameAttribute($name){
        return ucfirst($name);
     }

     public function designation (){
        return $this->belongsTo(Designation::class,'designation_id');
     }

     public function image() {
      return $this->morphOne(Image::class, 'parentable');
  }

  public function images() {
      return $this->morphMany(Image::class, 'parentable');
  }
}
