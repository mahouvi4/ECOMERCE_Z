<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class pagamento extends Model
{
    use HasFactory;
    use softDeletes;

protected $evo = "pagamentos";
protected $iva = [];
protected $dates=['nacimento'];
public function list(){
    return $this->belongTo(list_commande::class,'id_list_com','id');
}
}
