<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    protected $fillable = [
       'codeArt' , 'nomArt', 'pu', 'quantite', 'description', 'joursLivraison',
       'prixLivraison', 'garantie', 'delai', 'image',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function catégorie()
    {
        return $this->belongsTo('App\Models\catégorie');
    }
}

