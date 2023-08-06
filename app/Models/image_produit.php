<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class image_produit extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $imo ="image_produits";
    protected $ima = [];
}
