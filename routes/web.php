<?php

use App\Http\Controllers\categoriecontroller;
use App\Http\Controllers\commandecontroller;
use App\Http\Controllers\paniercontroller;
use App\Http\Controllers\produitcontroller;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\likecontroller;
use App\Http\Controllers\like2controller;
use App\Http\Controllers\boletocontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('admo', function () {
    return view('template');
});

Route::get('template_home', function () {
    return view('tempo.homo');
});

Route::get('pro_base',[produitcontroller::class,'pronto']);
//Route::get('pesquisa',[produitcontroller::class,'pesquisa']);

//CATEGORIE
Route::get("formulaire_categorie",[categoriecontroller::class,'create']);
Route::post("add_categorie",[categoriecontroller::class,'store']);
Route::get('Show_categorie',[categoriecontroller::class,'show']);
Route::get('edit_categorie/{id}',[categoriecontroller::class,'edit']);
Route::post('update_categorie/{id}',[categoriecontroller::class,'update']);
Route::get('delete_categorie/{id}',[categoriecontroller::class,'destroy']);
Route::get('restore_categorie',[categoriecontroller::class,'restore_cat']);
Route::get('delete_multiple_categorie',[categoriecontroller::class,'delete_multiple']);

//PRODUIT

Route::get('formulaire_produit',[produitcontroller::class,'create']);
Route::post('add_produit',[produitcontroller::class,'store']);
Route::get('show_produit',[produitcontroller::class,'show']);
Route::get('edit_produit/{id}',[produitcontroller::class,'edit']);
Route::post('update_produit/{id}',[produitcontroller::class,'update']);
Route::get('delete_produit/{id}',[produitcontroller::class,'destroy']);
Route::get('restore_produit',[produitcontroller::class,'restore_pro']);
Route::get('delete_multiple_produit',[produitcontroller::class,'del_multiple_pro']);
Route::get('delete_gallery/{id}',[produitcontroller::class,'dell_gallery']);

//TEMPLATE

Route::get('/',[produitcontroller::class,'list_cat_pro']);
Route::get('cat_pro/{id_cat}',[produitcontroller::class,'list_cat_pro']);
Route::get('description_produit/{id}',[produitcontroller::class,'description']);
Route::get('cat_pro',[produitcontroller::class,'cat_pro']);
Route::get('filtr_pro_idcat/{id_cat}',[produitcontroller::class,'cat_pro']);
Route::get('filtr_checkbox_pro_cat/{id_cat2}',[produitcontroller::class,'filtr_checkbox_pro_cat']);
Route::post('filter_price',[produitcontroller::class,'filter_produit'])->name('filter_price');



//USER
Route::get('formulaire_user',[usercontroller::class,'create']);
Route::post('add_user',[usercontroller::class,'store']);
Route::get('formulaire_log',[usercontroller::class,'formulaire_log']);
Route::post('login',[usercontroller::class,'add_login']);
Route::get('destroy_session',[usercontroller::class,'destroy_session']);

//PANIER
Route::post('addpanier',[paniercontroller::class,'add_panier']);
Route::get('count_card',[paniercontroller::class,'count_card']);
Route::get('show_card',[paniercontroller::class,'show_card']);
Route::get('card_vrai', function () {
    return view('tempo.panier2');
});

Route::get('add_card2/{id}',[paniercontroller::class,'add_card2']);

Route::post('update_panier',[paniercontroller::class,'update_panier']);
Route::get('delete_pro_panier/{id}',[paniercontroller::class,'delete_pro_panier']);
Route::get('card_final',[paniercontroller::class,'card_final']);

//COMMANDE
Route::post('add_commande',[commandecontroller::class,'add_commande']);
Route::get('show_commande_uniq',[commandecontroller::class,'list_commande_uniq']);
Route::get('all_commande',[commandecontroller::class,'all_commande']);
Route::get('detail_order/{id}',[commandecontroller::class,'detail_order']);

//PAGAMENTO
Route::get('formlaire_creadito/{id}',[commandecontroller::class,'pagar']);
Route::post('pagar_success',[commandecontroller::class,'add_pagar'])->name('pagar_success');
Route::get('pagboleto',[boletocontroller::class,'pagboleto'])->name('boleto_action');


//LIKE
Route::get('like_add/{id}',[likecontroller::class,'add_like']);
Route::get('like_add2/{id}',[like2controller::class,'add_like2']);
Route::get('count_like',[like2controller::class,'like2_count']);

Route::post('count',[likecontroller::class,'count'])->name('count');

//SWITCH
Route::get('formulaire_boleto/{id}/',[boletocontroller::class,'formulaire_boleto']);
Route::get('count_switch',[likecontroller::class,'count_switch']);

//GUIDE
Route::get('formulare_guide',[produitcontroller::class,'guide']);





