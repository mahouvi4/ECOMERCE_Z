

@if(isset($all_prox))
@foreach($all_prox as $item)
  <div class="col-md-6 col-sm-6 cheko_charge1">
       
           
              <div class="small-box-c">
                <div class="small-img-b">
                   <img src="{{asset('produit/'.$item->photo)}}" alt="#" />
                </div>
                <div class="dit-t clearfix">
                   <div class="left-ti">
                      <h4>Aenean luctus lacus</h4>
                      <p>23 <span>Like(s)</span></p>                   </div>
                   <a href="#" tabindex="0">${{$item->prix_pro}}</a>
                </div>




                <div class="dit-btn clearfix egox">
                          
                  <a class="wis" href="#" onclick="like({{$item->id}})"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>

                  <a class="thi" href="#" onclick="like2({{$item->id}})"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                  <a href="#" onclick="card2({{$item->id}})" class="gona">Add to card</a>

                 </div>



                
             </div>
             
  </div>
  @endforeach
  @endif

 