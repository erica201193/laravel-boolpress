<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        "title", "content"
    ];
    
    // Metodo relazione one to many con User
    public function user() 
    {
        return $this->belongsTo("App\User");
    }

    // Metodo relazione many to many con Tag
    public function tags() 
    {
        return $this->belongsToMany("App\Tag");
    }
}
