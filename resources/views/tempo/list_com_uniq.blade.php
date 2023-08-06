



@extends('base')
@section('css')

<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Document</title>
<style>
       
       body{
        background-color: rgb(23, 35, 51);
       
       }

     table{
               box-shadow: 0 25px 25px rgba(240, 243, 245, 0.885);
               border-radius : 20px;
        }

        img{
            border-radius : 75px;
        }

        th{
            text-align: center;
        }


        .card{
            box-shadow: 0 25px 25px rgba(24, 177, 197, 0.885);
            border-radius: 25px;
 
        }

        button{
            box-shadow: 0 25px 25px rgba(0, 12, 12, 0.885);
  
        }

        th{
            color: rgb(240, 243, 245);
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
<marquee behavior="" direction="" style="font-family:Matura MT Script Capitals;color:rgb(231, 238, 240)"><h1>We are waiting for your payment!!</h1></marquee>
       <div class="card">
        <div class="card-title" style="margin-left:0px;font-family:aharoni; color:rgba(10, 6, 22, 0.904)">
        
         <div class="row">
            <table class="table">
                <tr>
                    <th>Order_Cod</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Total</th>
                    <th>Action</th>
                    
                </tr>

                <tbody>
                    
                        @foreach ($commande_unique as $position => $item)
                              @if ($position==0)
                                <tr>
                                    <td style="text-align: center ;color:aqua">{{$item->cod_commande}}</td>
                                    <td style="text-align: center;color:rgb(6, 114, 238)">{{$item->created_at}}</td>

                                    @if ($item->statut==0)
                                    <td style="text-align: center;color:crimson">Waiting for payment</td> 
                                    @else
                                       @if ($item->statut==1)
                                       <td style="text-align: center;color:rgb(3, 8, 53)">Out for delivery</td> 
                                          @else
                                          <td style="text-align: center;color:rgb(3, 53, 38)">Delivered</td> 

                                       @endif
                                         
                                    @endif
                                    <td style="text-align: center;font-size:4rem;color:antiquewhite">${{number_format($item->total_commande,2,".","")}}</td>

                                    <td><a href="{{url('detail_order/'.$item->id)}}">Detail</a></td>
                                    
                                 </tr>
                                 
                                  
                              @endif
                        @endforeach
                   
                </tbody>
                <tfoot>
                    
                    <tr>
                        <td style="font-family:Franklin Gothic Medium"><h2 style="margin-left: 38px">Payment method:</h2></td>   
   
                        
                        @foreach ($commande_unique as $position=> $item)
                             @if ($position==0)
                                <td>
                                    <a href="{{url('formulaire_boleto/'.$item->id)}}"><button type="button" class="btn btn-info" style="color: rgb(6, 36, 36)">Boleto</button></a>
                                    <a href="{{url('formlaire_creadito/'.$item->id)}}"><button type="button" class="btn btn-primary">Card-Credit</button>
                                    </a>
                                  </td>
                             
                                 
                             @endif
                        @endforeach
   
                      
                         
   
                       </tr>
                   
                </tfoot>
            </table>
         </div>
        
        </div>
            
         </div>
     </div>
</div>
     
            <br><br><br><br>


@section('scripts')

@endsection

@endsection