<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use App\Models\image_produit;
use App\Models\produit;
use App\Models\like2;
use App\Models\User;
use Illuminate\Http\Request;

class produitcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate = categorie::all();
        return view('produit.create',["cate"=>$cate]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $add_pro = new produit();
        $add_pro->nom_pro = $request->nom_pro;
        $add_pro->ref_pro = $request->ref_pro;
        $add_pro->description_pro = $request->description_pro;
        $add_pro->prix_pro = $request->prix_pro;
        $add_pro->desconte_pro = $request->desconte_pro;
        $add_pro->stock = $request->stock;
        $add_pro->statut = $request->statut==TRUE ? "1":"0";
        $add_pro->popularite = $request->popularite==TRUE ? "1":"0";
        $add_pro->id_categorie = $request->categorie;

              if ($request->hasFile('photo')) {
                 $file = $request->file('photo');
                   $name = time().'.'.$file->getClientOriginalExtension();
                      $file->move('produit',$name);
                        $add_pro->photo = $name; 
              }

              $add_pro->save();
                     
                    if ($request->hasFile('photos')) {
                        foreach ($request->file('photos') as $key => $files) {
                            $names = time().'.'.$key.$files->Extension();
                              $files->move('produit',$names);
                                 $img_x = new image_produit();
                                 $img_x->id_produit = $add_pro->id;
                                 $img_x->photos = $names;
                                 $img_x->save();
                        }
                    }

                return response()->json(["status"=>200,"message"=>"Product successfully registered!!"]) ;  

    }
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $show_pro = produit::all();
        return view('produit.show',['show_pro'=>$show_pro]);
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_cato = categorie::all();
        $edit_pro = produit::find($id);
        return view('produit.edit',['edit_pro'=>$edit_pro,'edit_cato'=>$edit_cato]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $add_pro = produit::find($id);
        $add_pro->nom_pro = $request->nom_pro;
        $add_pro->ref_pro = $request->ref_pro;
        $add_pro->description_pro = $request->description_pro;
        $add_pro->prix_pro = $request->prix_pro;
        $add_pro->desconte_pro = $request->desconte_pro;
        $add_pro->stock = $request->stock;
        $add_pro->statut = $request->statut==TRUE ? "1":"0";
        $add_pro->popularite = $request->popularite==TRUE ? "1":"0";
        $add_pro->id_categorie = $request->categorie;

              if ($request->hasFile('photo')) {
                 $file = $request->file('photo');
                   $name = time().'.'.$file->getClientOriginalExtension();
                      $file->move('produit',$name);
                        $add_pro->photo = $name; 
              }

              $add_pro->update();
                     
                    if ($request->hasFile('photos')) {
                        foreach ($request->file('photos') as $key => $files) {
                            $names = time().'.'.$key.$files->Extension();
                              $files->move('produit',$names);
                                 $img_x = new image_produit();
                                 $img_x->id_produit = $add_pro->id;
                                 $img_x->photos = $names;
                                 $img_x->save();
                        }
                    }

                return response()->json(["status"=>200,"message"=>"Product Modified successfully!!"]) ;  

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        produit::find($id)->delete();
    }

    public function restore_pro(){
        produit::withTrashed()->restore();
    }

    public function del_multiple_pro(Request $request){
        produit::whereIn('id',explode(',',$request->stock_dd))->delete();
        return response()->json();
    }


  public function dell_gallery($id){
    if($id){
        image_produit::find($id)->delete();
        return response()->json();
    }
  }

  //PARTIE TEMPLATE

 
  public function list_cat_pro(Request $request,$id_cat=0){
    $categorie_all = categorie::all();
    $pro_stat_popular = produit::where(['statut'=>'1','popularite'=>'1'])->get();
   
    $produit_all = produit::all()->take(8);
           if($id_cat != 0){
            $produit_all = produit::where('id_categorie',$id_cat)->get();

           } 

            $produit_menu = produit::all();  

            return view('tempo.homo',['categorie_all'=>$categorie_all , 'produit_all'=>$produit_all, 'pro_stat_popular'=>$pro_stat_popular,'produit_menu'=>$produit_menu]);
    
  }



   public function description($id){
   
        $data=[];
        //$like_all_cli = like2::where('id_produit',$id)->get();// tu es la? oui appel
        
        $like_all_cli =like2::join("users",'users.id','=','like2s.id_user')->where('id_produit',$id)->limit(7)->get(["like2s.*",'users.*']);
        $produit_uniq = produit::find($id);
        $count_like2=like2::where('id_produit',$id)->count();
        $produit_similaire = produit::where('id_categorie', $produit_uniq->id_categorie)->get();
        $data['like_all_cli']= $like_all_cli;
        $data['produit_uniq']=  $produit_uniq ;
        $data['produit_similaire']=$produit_similaire;
        $data['count_like2']=$count_like2;

     return view('tempo.description',$data);
    
   
   }
  // $all_prox = produit::all()->take(1);
//$view->with('image', Image::random())
 
   public function cat_pro(Request $request,$id_cat=0){
     $all_catx = categorie::all();
     $all_prox = produit::all()->take(6);
     $prod_uno = produit::all()->take(1);

     if($id_cat != 0){
        $all_prox = produit::where('id_categorie',$id_cat)->get();

       } 

      return view('tempo.cat_pro',['all_catx'=>$all_catx, 'all_prox'=>$all_prox,'prod_uno'=>$prod_uno]);
   }


   public function filtr_checkbox_pro_cat(Request $request,$id_cat2){
    $all_prox = produit::where('id_categorie',$id_cat2)->get();
       //dd($checkoxxx);
       return view('tempo.filtr_check_box',['all_prox'=>$all_prox]);
   }


   public function filter_produit(Request $request){
     $eco1 = $request->min;
     $eco2 = $request->max;
     $all_prox = produit::select('*')->where('prix_pro','<=',$eco1)->orwhere('prix_pro','>=',$eco2)->get();
     return view('tempo.filtr_check_box',['all_prox'=>$all_prox]);

   }

   public function guide(){
    return view('tempo.guide');
   }

   public function pronto(){
    $proxi = produit::all();
    return view('base',['proxi'=>$proxi]);
   }


   /*public function pesquisa(Request $request){
    $search = $request->search;
    dd($search);
    if($search){
      $proto = produit::where([http://ecomercez.infinityfreeapp.com/formlaire_creadito/101
         ['nom_pro', 'like' , '%'.$search.'%']
      ])->get();
    }else{
     $proto = produit::all();
    }
     
    return response()->json(['status'=>200,'proto'=>$proto, 'search'=>$search]);
   
   }*/

}
