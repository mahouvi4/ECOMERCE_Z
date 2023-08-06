@extends('base')


@section('content')

  <!-- Modal -->
  <div class="modal fade lug" id="myModal" role="dialog">
    <div class="modal-dialog">
       <!-- Modal content-->
       <div class="modal-content">
          <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title">Change</h4>
          </div>
          <div class="modal-body">
             <ul>
                <li><a href="#"><img src="{{asset('images/flag-up-1.png')}}" alt="" /> United States</a></li>
                <li><a href="#"><img src="{{asset('images/flag-up-2.png')}}" alt="" /> France </a></li>
             </ul>
          </div>
       </div>
    </div>
 </div>
 <div id="sidebar" class="top-nav">
    <ul id="sidebar-nav" class="sidebar-nav">
       <li><a href="#">Help</a></li>
       <li><a href="howitworks.html">How it works</a></li>
       <li><a href="#">chamb for Business</a></li>
    </ul>
 </div>
 

 <div class="page-content-product">
    <div class="main-product">
       <div class="container">
          <div class="row clearfix">
             <div class="find-box">
                <h1>Find your next product or<br>business partner here.</h1>
                <h4>It has never been easier.</h4>
                <div class="product-sh">
                   <div class="col-sm-6">
                      <div class="form-sh">
                         <input type="text" placeholder="Search something you love" >
                      </div>
                   </div>
                   <div class="col-sm-3">
                      <div class="form-sh ekome">
                         <select class="selectpicker ekame" onchange="location = this.value">
                            <option>CATEGORY</option> 
                           @foreach ($categorie_all as $item)
                            <option value="{{url('cat_pro/'.$item->id)}}">{{$item->nom}}</option>  
                           @endforeach
                           
                         </select>
                      </div>
                   </div>
                   <div class="col-sm-3">
                      <div class="form-sh"> <a class="btn" href="#">Search</a> </div>
                   </div>
                   <p>Or simply ---><a href="{{url('/')}}" style="font-family:aharoni;color:aqua"> ALL_CATEGORY</a></p>
                </div>
             </div>
          </div>
          <div class="row clearfix">
                @foreach ($produit_all as $item)
                <div class="col-lg-3 col-sm-6 col-md-3 romeo">
                    <a href="productpage.html">
                       <div class="box-img">
                          <div><h4>{{$item->nom_pro}}</h4></div>
                          <img src="{{asset('produit/'.$item->photo)}}" alt="" style="height:300px"/>
                       </div>
                    </a>
                 </div>
               @endforeach
          </div>

         <!--REPEAT PRODUIT --->
          <div class="row clearfix">
            <div class="col-lg-3 col-sm-6 col-md-3">
               <a href="productpage.html">
                  <div class="box-img">
                     <h4>Product</h4>
                     <img src="{{asset('images/product/1.png')}}" alt="" />
                  </div>
               </a>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3">
               <a href="productpage.html">
                  <div class="box-img">
                     <h4>Product</h4>
                     <img src="{{asset('images/product/2.png')}}" alt="" />
                  </div>
               </a>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3">
               <a href="productpage.html">
                  <div class="box-img">
                     <h4>Product</h4>
                     <img src="{{asset('images/product/4.png')}}" alt="" />
                  </div>
               </a>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3">
               <a href="productpage.html">
                  <div class="box-img">
                     <h4>Product</h4>
                     <img src="{{asset('images/product/5.png')}}" alt="" />
                  </div>
               </a>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3">
               <a href="productpage.html">
                  <div class="box-img">
                     <h4>Product</h4>
                     <img src="{{asset('images/product/10.png')}}" alt="" />
                  </div>
               </a>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3">
               <a href="productpage.html">
                  <div class="box-img">
                     <h4>Product</h4>
                     <img src="{{asset('images/product/11.png')}}" alt="" />
                  </div>
               </a>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3">
               <a href="productpage.html">
                  <div class="box-img">
                     <h4>Product</h4>
                     <img src="{{asset('images/product/12.png')}}" alt="" />
                  </div>
               </a>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3">
               <a href="productpage.html">
                  <div class="box-img">
                     <h4>Product</h4>
                     <img src="{{asset('images/product/13.png')}}" alt="" />
                  </div>
               </a>
            </div>
            <div class="categories_link">
               <a href="#">Browse all categories here</a>
            </div>
         </div>

       </div>
    </div>
 </div>
 
 <div class="products">
    
    <div class="main-products">
       <h2>THE BEST-SELLING AND MOST POPULAR PRODUCTS</h2>
       
       <div class="product-slidr">
       
          <div class="slider">
            @foreach ($pro_stat_popular as $item)
             <div>
               
               
                  <div class="prod-box">
                    
                    <div class="prod-i">
                        
                       <img src="{{asset('images/tr1.png')}}" alt="#" />
                    </div>
                    <div class="prod-dit clearfix">
                       <div class="dit-t clearfix">
                          <div class="left-ti">
                             <h4>Table with Lights</h4>
                             <p>By <span>Beko</span> under <span>Lights</span></p>
                          </div>
                          <a href="#">$1220</a>
                       </div>
                       <div class="dit-btn clearfix">
                          <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                          <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                       </div>
                    </div>
                    
                 </div>
                
                 
             </div>
             @endforeach
            
          </div>
         
       </div>
       
    </div>
   
 </div>
 
 <br><br><br>
 <div class="cat-main-box">
    <div class="container">
       <div class="row panel-row">
          <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.0s">
             <div class="panel panel-default">
                <div class="panel-body">
                   <img src="{{asset('images/xpann-icon.jpg')}}" class="icon-small" alt="">
                   <h4>“Chamb” Your Business</h4>
                   <p>Grow easily with chamb. Create free account.
                      We help expanding your business easily.
                   </p>
                </div>
             </div>
          </div>
          <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
             <div class="panel panel-default">
                <div class="panel-body">
                   <img src="{{asset('images/create-icon.jpg')}}" class="icon-small" alt="">
                   <h4>Create and add</h4>
                   <p>Grow easily with chamb. Create free account.
                      We help expanding your business easily.
                   </p>
                </div>
             </div>
          </div>
          <div class="col-md-4 col-sm-6 wow fadeIn hidden-sm" data-wow-delay="0.4s">
             <div class="panel panel-default">
                <div class="panel-body">
                   <img src="{{asset('images/get-icon.jpg')}}" class="icon-small" alt="">
                   <h4>Get inspired</h4>
                   <p>Grow easily with chamb. Create free account.
                      We help expanding your business easily.
                   </p>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <div class="products_exciting_box">
    <div class="container">
       <div class="row">
          <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
             <div class="exciting_box f_pd">
                <img src="{{asset('images/exciting_img-01.jpg')}}" class="icon-small" alt="" />
                <h4>Explore <strong>exciting</strong> and exotic products
                   tailored to you.
                </h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                   quis nostrud exercitation ullamco laboris..
                </p>
             </div>
          </div>
          <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
             <div class="exciting_box l_pd">
                <img src="{{asset('images/exciting_img-02.jpg')}}" class="icon-small" alt="" />
                <h4><strong>List your products on</strong> chamb and grow connections.</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                   quis nostrud exercitation ullamco laboris..
                </p>
             </div>
          </div>
       </div>
    </div>
 </div>

 <div class="products">
    
    <div class="main-products">
       <h2>ALL PRODUCTS</h2>
       
       <div class="product-slidr">
       
          <div class="slider">
            @foreach ($produit_all as $item)
             <div>
               
               
                  <div class="prod-box">
                    
                    <div class="prod-i">
                        
                       <img src="{{asset('images/tr1.png')}}" alt="#" />
                    </div>
                    <div class="prod-dit clearfix">
                       <div class="dit-t clearfix">
                          <div class="left-ti">
                             <h4>Table with Lights</h4>
                             <p>By <span>Beko</span> under <span>Lights</span></p>
                          </div>
                          <a href="#">$1220</a>
                       </div>
                       <div class="dit-btn clearfix">
                          <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                          <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                       </div>
                    </div>
                    
                 </div>
                
                 
             </div>
             @endforeach
            
          </div>
         
       </div>
       
    </div>
   
 </div>

@section('scripts')

<script>
    $(function(){
           $(".ekame").on("change",function(){
                var id_cat = $(this).val();
                //alert(data);
               $.get("{{url('cat_pro')}}/"+id_cat,{},function(data){
                    $(".romeo").remove();
                    $(".juliette").html(data);
                    
               });
               
         });
});

</script>
@endsection

@endsection





-------------------------------------------------------


<?php

namespace App\Http\Controllers;

use App\Models\commande;
use App\Models\list_commande;
use App\Models\panier;
use App\Models\produit;
use App\Models\User;
use Illuminate\Http\Request;
use PagSeguro\Configuration\Configure;
use PagSeguro\Services\Session;
class commandecontroller extends Controller
{

private $_configs;
public function __construct()

  { 
    $this->_configs=new Configure();
    $this->_configs->setAccountCredentials(env("PAGSEGURO_EMAIL"),env("PAGSEGURO_TOKEN"));
    $this->_configs->setEnvironment(env("PAGSEGURO_AMBIENTE"));
    $this->_configs->setLog(true, storage_path('logs/pagseguro_'. date('Ymd'). '.log'));
       
  }

  public function getCredential(){
    return $this->_configs->getAccountCredentials();
  }



    public function add_commande(Request $request){
          if(session('info_user')){
            $com = new commande();
            $com->id_user = session('info_user')[0]->id;
            $com->firstname = $request->firstname;
            $com->name = $request->name;
            $com->email = $request->email;
            $com->cpf = $request->cpf;
            $com->country = $request->country;
            $com->state = $request->state;
            $com->city = $request->city;
            $com->street = $request->street;
            $com->zipcode = $request->zipcode;
            $com->tel = $request->tel;
            $com->cod_commande = time().'EX'.rand(1111,9999);
            $com->adress_commande = $request->adress_commande;

              $total_commande = 0;

                 $panier_t = panier::where('id_user',session('info_user')[0]->id)->get();
                    foreach($panier_t as $item){
                      $produit = produit::find($item->id_produit);
                        $total_commande += $item->qt*$produit->prix_pro;
                                        
                 }

             $com->total_commande = $total_commande;
             $com->save();

                 $panier_list = panier::where('id_user',session('info_user')[0]->id)->get();
                 foreach($panier_list as $item){
                    $list_produit = new list_commande();
                    $list_produit->id_produit = $item->id_produit;
                    $list_produit->id_user = session('info_user')[0]->id;
                    $list_produit->id_commande = $com->id;
                    $list_produit->qt_list = $item->qt;
                    $list_produit->total_list = $com->total_commande;

                    //qt
                    $list_produit->save();

                 }

              if(session('info_user')[0]->firstname==NULL){
                $updat_user = User::find(session('info_user')[0]->id);
                $updat_user->firstname = $request->firstname;
                $updat_user->name = $request->name;
                $updat_user->email = $request->email;
                $updat_user->cpf = $request->cpf;
                $updat_user->country = $request->country;
                $updat_user->state = $request->state;
                $updat_user->city = $request->city;
                $updat_user->street = $request->street;
                $updat_user->zipcode = $request->zipcode;
                $updat_user->tel = $request->tel;
                $updat_user->update();
              }   

              
               $panier_delete = panier::where('id_user',session('info_user')[0]->id);
               $panier_delete->delete();


              /* $panier_stock = panier::where('id_user',session('info_user')[0]->id)->get();
               foreach($panier_stock as $item){
                $proto = produit::find($item->id_produit);
                $proto->stock-$item->qt;
               } */

               return response()->json(['status'=>200,'message'=>'émarché!!']);
          }
    }

   
       public function  list_commande_uniq(){
         if(session('info_user')){
            $commande_unique = commande::where('id_user',session('info_user')[0]->id)->lazyByIdDesc();
            return view('tempo.list_com_uniq',['commande_unique'=>$commande_unique]);
         }
       }

    //PAGESEGURO
       public function pagar(Request $request,$id){
       if(session('info_user')){
         
        $data = [];
        $sessionCode = Session::create(
          $this->getCredential()
        );
        $IDSession = $sessionCode->getResult();
        $data["sessionID"] = $IDSession;

        $xx = list_commande::where('id_commande',$id)->get();
        $data["xx"] = $xx;
        return view('payment.credito',$data);
       }
       }

       
      


}

