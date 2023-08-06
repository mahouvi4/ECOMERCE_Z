
<div class="big-box charger_devo">
    @foreach($prod_uno as $item)
         
         <div class="big-img-box">
            <img src="{{asset('produit/'.$item->photo)}}" alt="#" />
         </div>
         <div class="big-dit-b clearfix">
            <div class="col-md-6">
               <div class="left-big">
                  <h3>Etiam sit amet urna semper, auctor arcu id</h3>
                  <p>By <span>Kale Celik Esya</span> under <span>Chairs</span></p>
                  <div class="prod-btn">
                     <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                     <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                     <p>23 likes</p>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="right-big-b">
                  <div class="tight-btn-b clearfix">
                     <a class="view-btn" href="#">View</a>
                     <a href="#">${{$item->prix_pro}}</a>
                  </div>  
        

    
              @endforeach
           <div class="like-list">
              <ul>
                 <li>
                    <div class="im-b"><img class="" src="{{asset('images/list-img-01.png')}}" alt="" /></div>
                 </li>
                 <li>
                    <div class="im-b"><img src="{{asset('images/list-img-02.png')}}" alt="" /></div>
                 </li>
                 <li>
                    <div class="im-b"><img src="{{asset('images/list-img-03.png')}}" alt="" /></div>
                 </li>
                 <li>
                    <div class="im-b"><img src="{{asset('images/list-img-04.png')}}" alt="" /></div>
                 </li>
                 <li>
                    <div class="im-b"><img src="{{asset('images/list-img-05.png')}}" alt="" /></div>
                 </li>
                 <li>
                    <div class="im-b"><img src="{{asset('images/list-img-06.png')}}" alt="" /></div>
                 </li>
                 <li>
                    <div class="im-b"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></div>
                 </li>
              </ul>
           </div>
        </div>
     </div>
  </div>
</div>





 @if(isset($all_prox) && count($all_prox))
 @foreach($all_prox as $item)
   <div class="col-md-6 col-sm-6 charg_pro_cato1">
        
            
               <div class="small-box-c">
                 <div class="small-img-b">
                    <img src="{{asset('images/tr1.png')}}" alt="#" />
                 </div>
                 <div class="dit-t clearfix">
                    <div class="left-ti">
                       <h4>Aenean luctus lacus</h4>
                       <p>By <span>Beko</span> under <span>Lights</span></p>
                    </div>
                    <a href="#" tabindex="0">$1220</a>
                 </div>
                 <div class="prod-btn">
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                    <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                    <p>23 likes</p>
                 </div>
              </div>
              
   </div>
   @endforeach
   @endif