





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
            box-shadow: 0 25px 25px rgba(12, 20, 18, 0.885);
  
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
<marquee behavior="" direction="" style="font-family:Matura MT Script Capitals;color:#f3fdfde2"><h1>Space of All Orders. . .</h1></marquee>
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
                    <th style="font-family:Franklin Gothic Medium; color:rgb(200, 255, 0)"><h3 style="margin-left:-27px">Payment method</h3></th>
                    
                </tr>

                <tbody>
                    
                        @foreach ($all_com as $item)
                              
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
                                    <td style="text-align: center;font-size:4rem;color:antiquewhite">${{$item->total_commande}}</td>

                                    <td><a href="{{url('detail_order/'.$item->id)}}" style="margin-left:30px;color:rgb(220, 20, 97)">View</a></td>
                                    
                                    <td>
                                        @if($item->statut == 0)
                                        <a href="{{url('formlaire_creadito/'.$item->id)}}"><button type="button" class="btn btn-info" style="color: rgb(6, 36, 36)">Boleto</button></a>
                                        <a href="{{url('formlaire_creadito/'.$item->id)}}"><button type="button" class="btn btn-primary">Card-Credit</button>
                                        </a>
                                        @else
                                            <p><h2 style="color: rgb(46, 42, 45);margin-left:40px">Paid</h2></p>
                                        @endif
                                      </td>
                                 </tr>
                                 
                                  
                             
                        @endforeach

                       
                   
                </tbody>
                <tfoot>
                    
                   
                   
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