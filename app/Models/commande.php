<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class commande extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $bax = "commandes";
    protected $bizo = [];

    public function list_com(){
        return $this->hasMany(list_commande::class,'id_list','id');
    }
}