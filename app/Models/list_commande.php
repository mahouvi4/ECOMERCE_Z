<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class list_commande extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $uvox = "list_commandes";
    protected $uvax = [];

    public function produit(){
        return $this->belongsTo(produit::class,'id_produit','id');
    }

    public function commande(){
        return $this->belongsTo(commande::class,'id_commande','id');  
    }
}

