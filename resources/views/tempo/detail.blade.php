<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Free download Transparent login form using html and css</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
  crossorigin="anonymous">
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
    .card{
        margin-top:110px;
       box-shadow: 0 25px 25px rgba(240, 243, 245, 0.885);
       opacity: 2rem;
       color:rgba(240, 243, 245, 0.885);
       
    }

   
    img{
            border-radius : 75px;
        }

       body{
        background-color:#000;
        }   
</style>
</head>
<body>
   
<div class="blur"></div>

		<div class="container">
            <div class="content">
                <div class="row">
                   <div class="card" style="background-color:rgba(3, 20, 26, 0.885)">
                    <div class="card-header"><p>Order Holder:</p><h2 style="color:rgba(55, 140, 238, 0.885);font-family:Matura MT Script Capitals">{{session('info_user')[0]->firstname.' '.session('info_user')[0]->name}}</h2></div>
                    <div class="card-body col-8">
                        
                        <div class="form-group">
                            @foreach($detail as $item)
                            
                        <p><img src="{{asset('produit/'.$item->produit->photo)}}" width="250px"></p>
                        <p>PRODUCT:  {{$item->produit->nom_pro}}</p>
                        <p> PRICE:   ${{number_format($item->produit->prix_pro, 2,".","")}}</p>
                        <p>QUANTITY: {{$item->qt_list}}</p>
                        
                        <p><h2 style="font-family:Matura MT Script Capitals;color:rgba(240, 232, 235, 0.959)">TOTAL: ${{number_format($item->total_list,2,".","")}}</h2></p>
                        <p>STATUS: {{$item->commande->statut}}</p>
                        @endforeach
                        </div>

                        <div class="card" style=" box-shadow: 0 25px 25px rgba(248, 248, 252, 0.885);text-align:center;font-family:Times New Roman;margin-top:-5px;border-radius : 25px;background-color:rgba(3, 20, 26, 0.885);color:rgb(20, 183, 233)" width="550px">
                               <p>ORDER ADDRESS:<br> {{session('info_user')[0]->country.', '.session('info_user')[0]->state.', '.session('info_user')[0]->city}}<br>{{session('info_user')[0]->street.' '.session('info_user')[0]->n_apto.', '.session('info_user')[0]->zipcode}}<br> <a style="font-size:1.5rem;color:rgb(215, 228, 227)" href="{{url('all_commande')}}">Return¬</a></p>
                              
                        </div>
                    </div>
                      
                   </div>
                </div>
            </div>
        </div>
</div>
<script src="http://code.jquery.com/jquery-1.11.1.js"></script> 

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
 integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
 integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script>
    function add_user(){
       var formdata = new FormData($("#uzav")[0]);
       $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
       $.ajax({
         type:"post",
         url:"{{url('add_user')}}",
         data:formdata,
         processData:false,
         contentType:false,
         success:function(response){
            console.log(response);
            if(response.status==400){
             $(".notif4").html(response.message).addClass('alert alert-danger');
            }else
              if(response.status==300){
                $(".notif4").html(response.message).addClass('alert alert-danger');

              }else{
                  window.location.href="{{url('/')}}";
              }
         }
       });
    }
 </script>

</body>
</html>