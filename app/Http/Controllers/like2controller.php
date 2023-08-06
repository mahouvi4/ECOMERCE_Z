<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\like2;

class like2controller extends Controller
{
    public function add_like2($id){
        if(session('info_user')){
            $like = new like2();
            $like->id_user = session('info_user')[0]->id;
            $like->id_produit = $id;
            $like->save();
            //$count_like2=like2::where('id_produit',$id)->count();
            return response()->json(['status'=>200,'message'=>'Thank for liked our product!!']);
           // return response()->json(['status'=>200,'message'=>'Thank for liked our product!!','count'=> $count_like2]);

            
        }
    }

    /*public function like2_count(){
        if(session('info_user')){
            $count_like2 = like2::where('id_user',session('info_user')[0]->id)->count();
            return response()->json($count_like2);

        }
    }*/


    /*  public function like2_count($id){
        
        $count_like2=like2::where('id_produit',$id)->count();
            return response()->json($count_like2);

        
    }
    */
}
