@extends('base')
 @section('css')
 <style>
   div.prod-box{
       height:370px;
       box-shadow: 0 25px 25px rgba(12, 1, 20, 0.885); 
   }

   .jiko{
           height:265px;
           
   }

   .clearfix{
      margin-top:-2px;
   }

   div .wis{
      margin-top:-12px;
   }

   div .thi{
      margin-top:-70px; 
   }

 div .gona{
    margin-left:15px;
    margin-top:-25px;
 }
   
 div .ferre_gola{
   box-shadow: 0 25px 25px rgba(4, 13, 15, 0.885); 

   border-radius : 25px;
 }

 .ballon{
   border-radius : 60px;
   
   overflow:auto;
   border:3px solid aqua;
 }

 .ekoyon{
   float:auto;
   display:inline;
   

 }
 </style>
 @endsection

@section('content')
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
                  <p>Or simply ---><a href="{{url('/')}}" style="font-family:aharoni;color:aqua"> ALL_PRODUCTS</a></p>
                 

               </div>
            </div>
            <marquee>  @foreach($produit_menu as $item)
               <div class="ekoyon">
                          <a href="{{url('description_produit/'.$item->id)}}"><img src="{{asset('produit/'.$item->photo)}}" alt="" style="height:80px;width:80px" class="ballon"/>
                          </a>
               </div>
                 @endforeach
              </marquee>
         </div>
        
         <div class="row clearfix">
               @foreach ($produit_all as $item)
               <div class="col-lg-3 col-sm-6 col-md-3 romeo" style="position:relative">
                   <a href="{{url('description_produit/'.$item->id)}}">
                      <div class="box-img">
                         <div><h4>{{$item->nom_pro}}</h4></div>
                         <img src="{{asset('produit/'.$item->photo)}}" alt="" style="height:300px" class="ferre_gola"/>
                      </div>
                   </a>
                </div>
              @endforeach
         </div>

        <!--REPEAT PRODUIT --->
        

      </div>
   </div>
</div>
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

<div class="start-free-box">
   <div class="container">
      <div class="row">
         <div class="container">
            <div class="main-start-box">
               <div class="free-box-a clearfix">
                  <div class="col-md-6 col-sm-6">
                     <div class="left-a-f">
                        <h3>A platform built for scale & expansion. Start for free.</h3>
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                     <div class="right-a-f">
                        <p>Over the comming years, way thet business through the web
                           works will change at agreat - and chamb is the
                           gamebreaker.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="main-start-box">
            <div class="bg_img_left"><img src="{{asset('images/bg_img1.png')}}" alt="#" /></div>
            <div class="container">
               <div class="buyer-box clearfix">
                  <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                     <div class="left-buyer">
                        <img class="img-responsive" src="{{asset('images/creat_pro.png')}}" alt="#" />
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                     <div class="right-buyer">
                        <h4>buyer</h4>
                        <h2>Empower your factory<br>
                           <span>With a new lead Channel</span>
                        </h2>
                        <p>Never worry about sales or income ftom outbound
                           channels. with chamb your store is directly
                           connected to thousands of interested in your
                           products.
                        </p>
                        <a href="#">Create a buyer account</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="bg_img_right"><img src="{{asset('images/bg_img1.png')}}" alt="#" /></div>
         <div class="main-start-box">
            <div class="container">
               <div class="supplier clearfix">
                  <div class="col-md-5 col-sm-6">
                     <div class="left-supplier">
                        <h4>supplier</h4>
                        <h2>Grow your store <br><span>With a new sales channel</span></h2>
                        <p>Never worry about sales or income ftom outbound
                           channels. with chamb your store is directly
                           connected to thousands of interested in your
                           products.
                        </p>
                        .
                        <a href="#">Create a supplier account</a>
                     </div>
                  </div>
                  <div class="col-md-7 col-sm-6">
                     <div class="right-supplier">
                        <img class="img-responsive" src="{{asset('images/supplier-pc-img.png')}}" alt="#" />
                     </div>
                  </div>
               </div>
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
               @foreach ($produit_all as $item)
               <div>
                 
                 
                    <div class="prod-box">
                      
                      <div class="prod-i">
                          
                        <a href="{{url('description_produit/'.$item->id)}}"><img src="{{asset('produit/'.$item->photo)}}" alt="#" class="jiko"/>${{$item->prix_pro}}</a>
                      </div>
                      <div class="prod-dit clearfix">
                         <div class="dit-t clearfix">
                            <div class="left-ti">
                               <h4>{{$item->nom_pro}}</h4>
                               
                            </div>
                            
                  </div>
                         <div class="dit-btn clearfix egox">
                          
                            <a class="wis" href="#" onclick="like({{$item->id}})"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                            <a class="thi" href="#" onclick="like2({{$item->id}})"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                            <a href="#" onclick="card2({{$item->id}})" class="gona">Add to card</a>
                           </div>
                      </div>
                      
                   </div>

                   
               </div>
               @endforeach
                 
                <div>
                  
            </div>

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