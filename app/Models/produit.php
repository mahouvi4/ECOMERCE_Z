<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class produit extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $iko = "produits";
    protected $ika = [];

    public function categorie(){
        return $this->belongsTo(categorie::class);
    }

    public function images(){
        return $this->hasMany(image_produit::class,'id_produit','id');
    }
}
