<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;
class Image extends Model
{
    use HasFactory;
    
    public function parentable() {
        return $this->morphTo();
    }

}
