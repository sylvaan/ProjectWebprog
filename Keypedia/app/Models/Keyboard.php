<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keyboard extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoryID', // ini bakal jadi FK
        'name',
        'price',
        'description',
        'image',
    ];

    public function category () {
        return $this->belongsTo(Category::class);
    }
    
}

//why yes ini apaan

//what the fuck is this

//migration (database) -> Models

//models = hasMany(blabla), hasOne(blabla)