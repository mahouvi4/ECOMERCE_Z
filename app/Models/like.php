<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class like extends Model
{
    use HasFactory;
    use softDeletes;

    protected $eno = "likes";
    protected $ixa = [];

    public function produit(){
        return $this->belongTo(produit::class,'id_produit','id');
    }

    public function user(){
        return $this->belongTo(User::class,'id_user','id');
    }
}
