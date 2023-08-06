<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\like;

class likecontroller extends Controller
{
    public function add_like($id){
        if(session('info_user')){
            $like = new like();
            $like->id_user = session('info_user')[0]->id;
            $like->id_produit = $id;
            $like->save();
            return response()->json(['status'=>200,'message'=>'You have just added this product to your favorites list!!']);
            
            
        }
    }

 public function count_switch(){
        if(session('info_user')){
            $count_switch = like::where('id_user',session('info_user')[0]->id)->count();
            return response()->json($count_switch);

        }
    }
    
}
