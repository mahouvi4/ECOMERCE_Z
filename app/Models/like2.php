<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;


class like2 extends Model
{
    use HasFactory;
    use softDeletes;

    protected $oo = "like2s";
    protected $aa = [];

    public function produit(){
        return $this->belongTo(produit::class,'id_produit','id');
    }

    public function user2(){
        return $this->hasMany(User::class,'id_user','id');
    }
}
