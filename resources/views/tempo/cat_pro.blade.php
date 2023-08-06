@extends('base')
@section('css')
<style>
    .afrobeat{
      height: 270px;
    }

    div .wis{
      margin-top:-12px;
   }

   div .thi{
      margin-top:-24px; 
   }

 div .gona{
    margin-left:16px;
    margin-top:20px;
 }
</style>
@endsection

@section('content')



<div class="furniture-box">
    <div class="terms-title">
       <div class="container">
          <div class="row">
             <ol class="breadcrumb">
                <li><a href="#">Forntpage </a></li>
                <li class="active">Furniture</li>
             </ol>
          </div>
       </div>
    </div>
 </div>
 <div class="furniture-box">
    <div class="container">
       <div class="row">
          <div class="furniture-main">
             <h2>Furniture</h2>
             <div class="col-md-3 col-sm-4">
                <div class="furniture-left">
                   <h3>Filter Products</h3>
                   <div class="by-box">
                      <h5>By price</h5>
                      <div id="slider-range"></div>
                      <p>
                         <input type="text" id="amount" readonly style="">
                      </p>
                   </div>


                   <div class="by-com">
                      <h5>By company</h5>
                      <div class="list-b">
                         <div id="boxscroll">
                            @foreach ($all_catx as $item)
                            @if (isset($all_catx) && count($all_catx)>0)
                                <div class="form-check">
                                    <input  type="radio" class="filled-in chk-col-blue filtro_cat mt-2" value="{{$item->id}}" id="checkbox1">
                                   
                                    <label for="checkbox1"><br>
                                    {{$item->nom}}
                                    </label>
                                 </div>
                                 @endif
                                @endforeach 
                             

                           
                          
                           
                         </div>
                      </div>
                   </div>
                   <div class="left-list-f">
                      <div class="panel-group" id="accordion">
                         <div class="panel panel-default">
                            <div class="panel-heading">
                               <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="panel-title expand">
                                  <div class="right-arrow pull-right"><span class="caret"></span></div>
                                  <a href="#">Sort by</a>
                               </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse">
                               <div class="panel-body">Lorem ipsum dolor sit amet,</div>
                            </div>
                         </div>
                         <div class="panel panel-default">
                            <div class="panel-heading">
                               <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="panel-title expand">
                                  <div class="right-arrow pull-right"><span class="caret"></span></div>
                                  <a href="#">Ships from(country)</a>
                               </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                               <div class="panel-body">Lorem ipsum dolor sit amet,</div>
                            </div>
                         </div>
                         <div class="panel panel-default">
                            <div class="panel-heading">
                               <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="panel-title expand">
                                  <div class="right-arrow pull-right"><span class="caret"></span></div>
                                  <a href="#">Style</a>
                               </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                               <div class="panel-body">Lorem ipsum dolor sit amet,</div>
                            </div>
                         </div>
                         <div class="panel panel-default">
                            <div class="panel-heading">
                               <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="panel-title expand">
                                  <div class="right-arrow pull-right"><span class="caret"></span></div>
                                  <a href="#">Pattern type</a>
                               </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse">
                               <div class="panel-body">Lorem ipsum dolor sit amet,</div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-md-6 col-sm-8">
                <div class="furniture-middle">
                    
                   <div class="big-box daho_original">
                        @foreach($prod_uno as $item)
                        <div class="big-img-box">
                            <img src="{{asset('produit/'.$item->photo)}}" alt="#" />
                         </div>
                         <div class="big-dit-b clearfix">
                            <div class="col-md-6">
                               <div class="left-big">
                                  <h3>{{$item->nom_pro}}</h3>
                                  <p>By <span>Kale Celik Esya</span> under <span>Chairs</span></p>
                                  <div class="prod-btn">
                                     <a href="#" onclick="like({{$item->id}})"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                     <a href="#" onclick="like2({{$item->id}})"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                     <a href="#" onclick="card2({{$item->id}})" class="gona">Add to card</a>

                                     
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
   
                   
                   <div class="row cat-pd">
                    
                    @if(isset($all_prox) && count($all_prox))
                    @foreach($all_prox as $item)
                   
                      <div class="col-md-6 col-sm-6 pro_original">
                           
                               
                                  <div class="small-box-c">
                                    <div class="small-img-b">
                                       <img src="{{asset('produit/'.$item->photo)}}" alt="#" class="afrobeat"/>
                                    </div>
                                    <div class="dit-t clearfix">
                                       <div class="left-ti">
                                          <h4>{{$item->nom_pro}}</h4>
                                          <p>23 <span>Like(s)</span></p>

                                       </div>
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
                       <p class="cheko_charge1"></p>
                   </div>
                   

                  
                </div>
             </div>
             <div class="col-md-3 hidden-xs">
                <div class="furniture-right">
                   <h3>Subcategories</h3>
                   <div class="right-list-f">
                      <ul>
                        @if(isset($all_catx) && count($all_catx))
                           @foreach($all_catx as $item)
                           <li><a href="{{url('filtr_pro_idcat/'.$item->id)}}" class="clico"  value="{{$item->id}}"><img width="32" src="{{asset('categorie/'.$item->photo)}}" alt="#" /> {{$item->nom}}</a></li>

                           @endforeach
                        @endif
                         
                      </ul>
                   </div>
                </div>
             </div>
             <div class="loding-box">
                <a href="#">
                   <div class="sk-wave">
                      <div class="sk-rect sk-rect1"></div>
                      <div class="sk-rect sk-rect2"></div>
                      <div class="sk-rect sk-rect3"></div>
                      <div class="sk-rect sk-rect4"></div>
                      <div class="sk-rect sk-rect5"></div>
                   </div>
                   <span>Loding more awesome products...</span>
                </a>
             </div>
          </div>
       </div>
    </div>
 </div>


   @section('scripts')
 
   




   @endsection

@endsection