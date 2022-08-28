<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $fillable = [
        "address",
        "city",
        "province",
        "country",
        "phone",
    ];

     // Metodo relazione one to one con User
    public function user() 
    {
        return $this->belongsTo("App\User");
    }
}
