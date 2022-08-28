<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // Metodo relazione one to many con Post
    public function posts() 
    {
        return $this->belongsToMany("App\Post");
    }
}
