<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    
   public function create(){
    return view('user.create');
   }

   public function store(Request $request){
     if($request->password != $request->password2){
             return response()->json(["status"=>400,"message"=>"Sorry, incompartable password!!"]);
     }elseif(empty($request->name) || empty($request->email) || empty($request->password) || empty($request->password2) || empty($request->profile)){
                 return response()->json(["status"=>400,"message"=>"Sorry Please complete all fields!!"]);
     }else{
         $add_user = new User();
         $add_user->name = $request->name;
         $add_user->email = $request->email;
         $add_user->password = $request->password;
             if($request->hasFile('profile')){
                 $file = $request->file('profile');
                   $name = time().'.'.$file->getClientOriginalExtension();
                     $file->move('User',$name);
                      $add_user->profile = $name;
             }

             $add_user->save();
             if(User::where(['email'=>$request->email, 'password'=>$request->password])->count()>0){
                    $info_user = User::where(['email'=>$request->email, 'password'=>$request->password])->get();
                      session(['info_user'=>$info_user]);
                      return response()->json(['status'=>200, 'message'=>'success']);

             }
     }
   
   }


public function formulaire_log(){
    return view('user.for_log');
}

   public function add_login(Request $request){
    if(User::where(['email'=>$request->email, 'password'=>$request->password])->count()>0){
        $info_user = User::where(['email'=>$request->email, 'password'=>$request->password])->get();
          session(['info_user'=>$info_user]);
          return response()->json(['status'=>200, 'message'=>'success']);

 }else{
    return response()->json(['status'=>300, 'message'=>'Sorry, Incorrect Password or Email / or make sure you fill in all the fields !!']);
 
 }
   }

   public function destroy_session(){
    session()->forget('info_user');
    return response()->json();
   }

}
