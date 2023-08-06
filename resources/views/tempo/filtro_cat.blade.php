<div class="row clearfix">
          
    @foreach ($produit_all as $item)
     <div class="col-lg-3 col-sm-6 col-md-3 juliette">
      
       <a href="productpage.html">
          <div class="box-img">
             <h4>Product</h4>
             <img src="{{asset('produit/'.$item->photo)}}" alt="" />
          </div>
       </a> 
       

     </div>
     @endforeach
   
  </div>
