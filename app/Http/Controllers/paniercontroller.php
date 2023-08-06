<?php

namespace App\Http\Controllers;

use App\Models\panier;
use App\Models\produit;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class paniercontroller extends Controller
{
    




 public function add_panier(Request $request){
    if(session('info_user')){

        $add_panier = new panier();
        $add_panier->id_user = $request->user;
        $add_panier->id_produit = $request->id_produit;
        $add_panier->qt = $request->qt;
        $add_panier->color = $request->color;
        $add_panier->save();
        return response()->json(['status'=>200,'message'=>'Congratulations, You have just added a product to the cart!!']);
    }else{
        return response()->json(['status'=>300,'message'=>'success']);
    }
 }


   public function count_card(){
     if(session('info_user')){
        $count_card = panier::where('id_user',session('info_user')[0]->id)->count();
        return response()->json($count_card);
     }
   }

   public function show_card(){
    if(session('info_user')){
        $show_card = panier::where('id_user',session('info_user')[0]->id)->get();
        return view('tempo.panier1',['show_card'=>$show_card]);
    }else{
        return redirect('formulaire_log');
    }
   }


   public function update_panier(Request $request){
    if(session('info_user')){
        $up_panier = panier::find($request->id_panier);
        $up_panier->qt = $request->quantite;
        $up_panier->update();
        return response()->json(["status"=>200]);
        
    }
   }

   public function delete_pro_panier($id){
     if(session('info_user')){
         panier::find($id)->delete();
     }
   }

   public function card_final(){
    if(session('info_user')){
        $show_card_final = panier::where('id_user',session('info_user')[0]->id)->get();
       return view('tempo.card_final',['show_card_final'=>$show_card_final]);
    }
   }


   public function add_card2($id){
    if(session('info_user')){
        $add_card2 = new panier();
        $add_card2->id_user = session('info_user')[0]->id;
        $add_card2->id_produit = $id;
        $add_card2->qt = 1;
        $add_card2->save();
        return response()->json(['status'=>200,'message'=>'Congratulations, You have just added a product to the cart!!']);
    }
   }
}

