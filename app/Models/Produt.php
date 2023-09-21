<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produt extends Model
{
    use HasFactory;

    protected $fillable = [
        "image",
        "name",
        "desc",
        "prix",
        "stock",
        "categorie_id",
    ];

    //* Categorie
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function users(){
        return $this->belongsToMany(User::class , "user_products");
    }
}
