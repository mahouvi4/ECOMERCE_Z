@extends('base')

@section('css')
   <style>
    .jiko{
      height:350px;
    }

      .elog{
         height: 80px;
         width: 200px;
      }

      .select2{
         width: 220px;
      }

      .makoma{
         height:120px;
      }

      .igaz{
         height:450px;
      }

      div .wis{
      margin-top:-24px;
   }

   div .thi{
      margin-top:-24px; 
   }

   .gona{
      margin-left:80px; 
      margin-top:-75px;
   }

     .goza{
      margin-top:240px;  

     }

     .likox{
      margin-top:-30px;
      margin-left:10px;
     }
   </style>
@endsection

@section('content')


<div class="terms-conditions product-page">
    <div class="terms-title">
       <div class="container">
          <div class="row">
             <ol class="breadcrumb">
                <li><a href="#">Forntpage </a></li>
                <li class="active">Furniture</li>
                <li class="active">Sofa</li>
                <li><a href="#">All setup Sofa</a></li>
             </ol>
          </div>
       </div>
    </div>
 </div>
 <div class="product-page-main">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="prod-page-title">
                <h2>All setup Sofa</h2>
                <p>By <span>Dex Morgan Mobilya</span></p>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-2 col-sm-4">
             <div class="left-profile-box-m prod-page" style="box-shadow: 0 25px 25px rgba(12, 1, 20, 0.885)">
                <div class="pro-img">
                   <img src="{{asset('produit/'.$produit_uniq->photo)}}" alt="#" />
                </div>
                <div class="pof-text">
                   <h3>{{$produit_uniq->nom_pro}}</h3>
                   <div class="check-box"></div>
                </div>
                <a href="#">Visit store</a>
             </div>
          </div>
         
          <div class="col-md-7 col-sm-8">
             <div class="md-prod-page">
                <div class="md-prod-page-in">
                    
                    <div class="page-preview">
                        <div class="preview">
                            <div class="notif6"></div>
                           <div class="preview-pic tab-content">
                            
                            <div class="tab-pane active" id="pic-1">
                               
                                <img id="principal" src="{{asset('produit/'.$produit_uniq->photo)}}" style="height:320px"/>
                                
                            </div>
                            
                           </div>
                          <input type="hidden" value="{{$produit_uniq->id}}" id="idproduit">
                        
                           <ul class="preview-thumbnail nav nav-tabs">
                            @foreach ($produit_uniq->images as $item)
                           <li ><img src="{{asset('produit/'.$item->photos)}}" onclick="changeimage(this)" alt="#" class="elog fille" style="box-shadow: 0 25px 25px rgba(12, 1, 20, 0.885)"/></li>
                           @endforeach
                            
                           
                           </ul>
                           
                        </div>
                     </div>
                   <div class="btn-dit-list clearfix">
                      <div class="left-dit-p">
                         <div class="prod-btn">
                            <a href="#" onclick="like({{$produit_uniq->id}})"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                            <a href="#" onclick="like2({{$produit_uniq->id}})" class="like2x"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                            <p class="count">{{$count_like2}}</p> like(s)
                         </div>
                      </div>
                      <div class="right-dit-p">


                        <div class="like-list">
                           <ul>
                              @foreach($like_all_cli as $item)
                              <li>
                                 <div class="im-b"><img class="" src="{{asset('User/'.$item->profile)}}" style="width: 35px;height:30px" alt=""></div>
                                
                              </li>
                              @endforeach
                            
                              <li>
                                 <div class="im-b"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></div>
                              </li>
                           </ul>
                        </div>
                     </div>
                   </div>
                   
                </div>
                <div class="description-box">
                   <div class="dex-a">
                      <h4>Description</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                         lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                         when an unknown printer took a galley of type and scrambled it to make a 
                         type specimen book..
                      </p>
                      <br>
                      <p>Small: H 25 cm / &Oslash; 12 cm</p>
                      <p>Large H 24 cm / &Oslash; 25 cm</p>
                   </div>
                   <div class="spe-a">
                      <h4>Specifications</h4>
                      <ul>
                         <li class="clearfix">
                            <div class="col-md-4">
                               <h5>Measurments</h5>
                            </div>
                            <div class="col-md-8">
                               <p>H25 cm / 0 12 cm and H 24 cm / 0 25 cm</p>
                            </div>
                         </li>
                         <li class="clearfix">
                            <div class="col-md-4">
                               <h5>Material</h5>
                            </div>
                            <div class="col-md-8">
                               <p>Material Name</p>
                            </div>
                         </li>
                         <li class="clearfix">
                            <div class="col-md-4">
                               <h5>Wire</h5>
                            </div>
                            <div class="col-md-8">
                               <p>Wire Name</p>
                            </div>
                         </li>
                         <li class="clearfix">
                            <div class="col-md-4">
                               <h5>Comdition</h5>
                            </div>
                            <div class="col-md-8">
                               <p>Brand new</p>
                            </div>
                         </li>
                         <li class="clearfix">
                            <div class="col-md-4">
                               <h5>SKU number</h5>
                            </div>
                            <div class="col-md-8">
                               <p>SKU number</p>
                            </div>
                         </li>
                         <li class="clearfix">
                            <div class="col-md-4">
                               <h5>Shipping</h5>
                            </div>
                            <div class="col-md-8">
                               <p>Shipping worldwide</p>
                            </div>
                         </li>
                         <li class="clearfix">
                            <div class="col-md-4">
                               <h5>Warranty</h5>
                            </div>
                            <div class="col-md-8">
                               <p>1 years</p>
                            </div>
                         </li>
                         <li class="clearfix">
                            <div class="col-md-4">
                               <h5>Delivery</h5>
                            </div>
                            <div class="col-md-8">
                               <p>Choose country</p>
                            </div>
                         </li>
                      </ul>
                   </div>
                </div>
             </div>
             <div class="similar-box">
                <h2>Similiar products from Morgan Mobilya</h2>
                <div class="row cat-pd">
                  @foreach ($produit_similaire as $item)
                  <div class="col-md-6">
                     <div class="small-box-c igaz" style="box-shadow: 0 25px 25px rgba(12, 1, 20, 0.885)">
                        <div class="small-img-b makoma">
                           
                         <a href="{{url('description_produit/'.$item->id)}}"><img src="{{asset('produit/'.$item->photo)}}" alt="#" class="img-responsive jiko"/>${{$item->prix_pro}}</a>
                       </div>
                       
                          <div class="dit-t clearfix">
                             <div class="left-ti goza">
                                <h4>{{$item->nom_pro}}</h4>
                                <p class="likox">23 likes</p>
                             </div>
                             
                   </div>
                   
                          <div class="prod-btn egox">
                           
                           <a href="#" onclick="card2({{$item->id}})" class="gona">Add to card</a>
                           
                             <a class="wis" href="#" onclick="like({{$item->id}})"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                             <a class="thi" href="#" onclick="like2({{$item->id}})"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                             
                           </div>

                       
                       
                    </div>
 
                    
                </div>
                  @endforeach
                  
                </div>
                
             </div>
          </div>
          <div class="col-md-3 col-sm-12">
             <div class="price-box-right" style="box-shadow: 0 25px 25px rgba(12, 1, 20, 0.885)">
                <h4>Price</h4>
                <h3>${{number_format($produit_uniq->prix_pro,2,".","")}} <span>pr.peice</span></h3>
                <p style="font-family:aharoni">CHOSE THE COLOR</p>
                  <form method="POST" id="lovax">
                    @if (session('info_user'))
                        <input type="hidden" value="{{session('info_user')[0]->id}}" name="user">
                    
                        
                    @endif

                    <input type="hidden" value="1" name="qt">
                    <input type="hidden" value="{{$produit_uniq->id}}" name="id_produit">
                    <select class="form-control select2" name="color" id="color">
                   

                        <option value="Rouge">No matter</option>
                        <option value="Rouge">Red</option>
                        <option value="Blue">Bleu</option>
                        <option value="Violet">Purple</option>
                        <option value="Noir">Black</option>
                        <option value="Rose">Pink</option>
                        <option value="Vert">Green</option>
                   
                     </select>

                     <button type="button" class="btn btn-info mt-2"  onclick="card()" style="margin-top: 6px; width:220px; box-shadow: 0 25px 25px rgba(12, 1, 20, 0.885)">Add To Card</button>
                  </form>
               
                <h5><i class="fa fa-clock-o" aria-hidden="true"></i> <strong>16 hours</strong> avg. responsive time</h5>
             </div>
          </div>
       </div>
    </div>
 </div>



   @section('scripts')
   <script>
      $(function(){
         function like2(id){
         $.ajax({
             type:"get",
             url:"{{url('like_add2')}}/"+id,
             success:function(response){
                if (response.status==200) {
                   //alert(" liké2");
                   $("#pcount").text("");
                   $("#pcount").text(response.count);
                  
                }else{
                   window.location.href="{{url('formulaire_log')}}";
                }
             }
         });
      }
      });
   
        
   </script>
   @endsection

@endsection