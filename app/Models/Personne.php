<?php

namespace App\Models;

use App\Models\Formation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Personne extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'education_level',
        'field',
        'specialization',
        'address',
        'phone_number',
        'email',
        'age',
        'interests',
        'career_project',
        'stage_requirements'
    ];
    public function formations(){
        return $this->belongsToMany(Formation::class);
        
    }
}
