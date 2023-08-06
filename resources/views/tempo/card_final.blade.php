@extends('base')
@section('css')

<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Document</title>
<style>
     table{
               box-shadow: 0 25px 25px rgba(12, 1, 20, 0.885);
               border-radius : 20px;
        }

        img{
            border-radius : 75px;
        }

        th{
            text-align: center;
        }


        .card{
            box-shadow: 0 25px 25px rgba(12, 1, 20, 0.885);
 
        }

    


</style>
</head>
@endsection

@if (! session('info_user'))
<script>
    window.location.href="{{url('/')}}";
</script>
@endif

@section('content')


<br><br><br><br>


        
  
<body>
 <div class="comodox"></div>
    @include('modal1')
    <div class="container">
       <div class="content">

       <div class="card">
        <div class="card-title" style="margin-left:350px;font-family:aharoni; color:rgba(10, 6, 22, 0.904)"><h1>Order area ♣</h1></div>
            <div class="card-header">

            </div>
       <br><br>
          <div class="card-body">
            <div class="col-md-5 col-lg-8 order-md-last">

            <br><br>
               <!--    ADRESSE USER VRAI     -->

                <form method="POST" id="edson">
                <div class="group-control">
                    <label for="">Firstname*</label>
                    <input type="text" name="firstname" class="form-control" value="{{session('info_user')[0]->firstname}}">
                </div>

                <div class="group-control">
                    <label for="">Name*</label>
                    <input type="text" name="name" class="form-control" value="{{session('info_user')[0]->name}}">
                </div>

                <div class="group-control">
                    <label for="">Email*</label>
                    <input type="email" name="email" class="form-control" value="{{session('info_user')[0]->email}}">
                </div>

                <div class="group-control">
                    <label for="">Cpf*</label>
                    <input type="number" name="cpf" class="form-control" value="{{session('info_user')[0]->cpf}}">
                </div>

                <div class="group-control">
                    <label for="">Country*</label>
                    <input type="text" name="country" class="form-control" value="{{session('info_user')[0]->country}}">
                </div>

                <div class="group-control">
                    <label for="">State*</label>
                    <input type="text" name="state" class="form-control" value="{{session('info_user')[0]->state}}">
                </div>


             
              <!--    ADRESSE DE USER COMPLEMENTAIRE      -->


           <div class="col-md-3 col-lg-6 order-md-last">
                    <div class="group-control">
                        <label for=""  style="margin-left:-15px">city*</label>
                        <input type="text" name="city" class="form-control" style="margin-left:-15px" value="{{session('info_user')[0]->city}}">
                    </div>

                    <div class="group-control">
                        <label for=""  style="margin-left:-15px">District*</label>
                        <input type="text" name="dist" class="form-control" style="margin-left:-15px" value="{{session('info_user')[0]->dist}}">
                    </div>
    
                    <div class="group-control">
                        <label for=""  style="margin-left:-15px">Street*</label>
                        <input type="text" name="street" style="margin-left:-15px" class="form-control" value="{{session('info_user')[0]->street}}">
                    </div>

                    <div class="group-control">
                        <label for=""  style="margin-left:-15px">N_APT*</label>
                        <input type="number" name="n_apto" style="margin-left:-15px" class="form-control" value="{{session('info_user')[0]->n_apto}}">
                    </div>
    
                    <div class="group-control">
                        <label for=""  style="margin-left:-15px">Zipcode*</label>
                        <input type="number" name="zipcode" style="margin-left:-15px" class="form-control" value="{{session('info_user')[0]->zipcode}}">
                    </div>

                    <div class="group-control">
                        <label for="" style="margin-left:-15px">DDD*</label>
                        <input type="number" name="ddd" style="margin-left:-15px" class="form-control" value="{{session('info_user')[0]->ddd}}">
                    </div> 

                    <div class="group-control">
                        <label for="" style="margin-left:-15px">Tel*</label>
                        <input type="number" name="tel" style="margin-left:-15px" class="form-control" value="{{session('info_user')[0]->tel}}">
                    </div>  

             </div>         


             
             <!--    ADRESSE DE LIVRAISON      -->

             <div class="col-md-6 col-lg-6 order-md-last">
                

                <div class="group-control">
                    <label for="" style="margin-left:15px">Address_Order</label>
                    <textarea name="adress_commande" style="margin-left:15px"  class="form-control">{{session('info_user')[0]->adress_commande}}</textarea>
                </div>

               
               

         </div>    



      </form>
            </div>
          </div>
        </div>
    
              <!--    TABLE INFO     -->


    <div class="col-md-6 col-lg-4 order-md-last">
        <table class="table" style="margin-top:25px;background-color:rgb(3, 3, 26)">
            
            <thead style="font-size: 1.5rem;color:bisque">
                
                <tr>
    
                    
                    <th>Product</th>
                    <th>Price x Qts</th>
                    <th>Subtotal</th>
                    
                    
                </tr>
                </tr>
            </thead>
    
            <tfoot style="font-size: 1.5rem;color:rgb(25, 197, 197)">
                
             </tfoot>
    
              <tbody style="font-size: 0.8rem;font-family:aharoni">
                @php
                    $total = 0;
                @endphp
                @foreach ($show_card_final as $item)
                <tr class="vieux">
    
                    <td style="color:rgb(238, 32, 228) ;font-size:2rem">{{$item->produit->nom_pro}}</td>
                    <td style="color:rgb(27, 158, 233) ;font-size:2rem">$ {{$item->produit->prix_pro}} <h3 style="color: aqua">x</h3> {{$item->qt}}</td>
                   
                    <td style="color:deeppink ;font-size:2rem">$ {{$item->produit->prix_pro*$item->qt}}</td>
    
                
    
                </tr>
    
                @php
                $total += $item->produit->prix_pro*$item->qt;
              @endphp
                @endforeach
    
              </tbody>
                
              <tfoot>
                <tr>
                    <td><h2>TOTAL:</h2></td>
                        @if ($total==0)
                        <td style="color: rgb(255, 0, 64) ;text-align:center;font-family:aharoni"><h1>your basket is empty ---><a href="{{url('/')}}">Add_Product</a></h1></td>
    
                           @else
                           <td style="color: chartreuse"><h1 style="font-family:aharoni">$ {{$total}}</h1></td>
    
                        @endif    
                 
                </tr>
    
                
              </tfoot>
        </table>

        <div>
            <tr>
                     @if ($total==0)
                        
                     @else
                     <a href="#" onclick="add_commande()" style="color:rgb(4, 11, 31);margin-left: 3px ; margin-top:12px; font-size:4rem"><i class="fa-solid fa-file-export">PAY</i></a>
                    
                     @endif            
              </tr>
        </div>
     </div>
    
    
    </div>  
   
  
       </div>
   </div>
    

   
    

    
  
  




  <br><br><br><br>


@section('scripts')

@endsection

@endsection