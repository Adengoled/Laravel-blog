<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category() {
        return $this->belongsTo(Category::class);  //we creeren hier een relatie tss post en categorie om de juiste categorie te kunnen weergeven in onze view
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
