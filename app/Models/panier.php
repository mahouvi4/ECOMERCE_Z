<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class panier extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $olox = "paniers";
    protected $alax = [];

    public function produit(){
        return $this->belongsTo(produit::class,'id_produit','id');
    }
}
