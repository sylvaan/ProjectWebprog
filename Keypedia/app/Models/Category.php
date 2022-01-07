<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoryID', // ini bakal jadi FK
        'categoryName',
        'categoryImage',
    ];

    public function Keyboards () {
        return $this->hasMany(Keyboard::class);
    } 
}

//why yes ini apaan
