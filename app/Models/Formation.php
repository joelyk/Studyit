<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Personne;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Formation extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content'
    ];

    public function image(){
        return $this->hasOne(Image::class);
    }

    public function personnes(){
        return $this->belongsToMany(Personne::class);
        
    }
}

