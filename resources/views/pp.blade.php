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

 //-------------------------------------------------------


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
                   <p>Or simply ---><a href="{{url('/')}}" style="font-family:aharoni;color:aqua"> ALL_PRODUCTS</a></p>
                </div>
                <a href="{{url('cat_pro')}}">cat_pro</a>
             </div>
          </div>
          <div class="row clearfix">
                @foreach ($produit_all as $item)
                <div class="col-lg-3 col-sm-6 col-md-3 romeo" style="position:relative">
                    <a href="{{url('description_produit/'.$item->id)}}">
                       <div class="box-img">
                          <div><h4>Product</h4></div>
                          <img src="{{asset('produit/'.$item->photo)}}" alt="" style="height:300px"/>
                       </div>
                    </a>
                 </div>
               @endforeach
          </div>

         <!--REPEAT PRODUIT --->
         

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
                        
                       <img src="{{asset('produit/'.$item->photo)}}" alt="#" />
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
                          <a class="wis" href="#" onclick="like({{$item->id}})"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
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
                     
                       <img src="{{asset('produit/'.$item->photo)}}" alt="#"/>
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
                          <a class="wis" href="#" onclick="like({{$item->id}})"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
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

//////////////////////////


success:function(response){
   console.log(response);
  if(response.status==200){
   $("#vox").html(response.message).addClass('alert alert-success');
   $("#general1").modal('show');
   count_card()
   count_switch()
   
   
  }else{
  if(response.status==300){
   window.location.href="{{url('formulaire_log')}}";

  }
}
}-------------------------------------------------------

success:function(response){
   console.log(response);
  if(response.status==200){
   $("#vox").html(response.message).addClass('alert alert-success');
   $("#general1").modal('show');
   $('#pcount').text(response.count);
   count_card()
   count_switch()
   
   
  }else{
  
   window.location.href="{{url('formulaire_log')}}";

  
}
}

--------------------------------------------------------------------

<div class="col-md-6">
   <div class="small-box-c" style="box-shadow: 0 25px 25px rgba(12, 1, 20, 0.885)">
      <div class="small-img-b makoma">
         <a href="{{url('description_produit/'.$item->id)}}"><img class="img-responsive" src="{{asset('produit/'.$item->photo)}}" alt="#" /></a>
      </div>
      <div class="dit-t clearfix">
         <div class="left-ti">
            <h4>{{$item->nom_pro}}</h4>
            <p>By <span>Beko</span> under <span>Lights</span></p>
         </div>
         <a href="#" tabindex="0">${{$item->prix_pro}}</a>
      </div>
      <div class="prod-btn">
         <a href="#" onclick="like({{$item->id}})"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
         <a href="#" onclick="like2({{$item->id}})"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
         <p>23 likes</p>
      </div>
   </div>
</div>