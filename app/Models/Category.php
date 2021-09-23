<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function posts() {
        return $this->hasMany(Post::class);  //we creeeren hier een relatie tss post en categorie om alle posts in onze view te kunnen weergeven die onder de categorie vallen)
    }
}
