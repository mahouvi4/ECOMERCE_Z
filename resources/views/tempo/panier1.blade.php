
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <style>
       
    </style>
</head>
<body>
 <div class="fox"></div>
    @include('modal1')
    <div class="container">
       <div class="content">
        <div class="row">
            <a href="{{url('cat_pro')}}" style="color:rgb(4, 11, 31);font-size:2rem"><i class="fa-solid fa-file-export ili">Add other products</i></a>

            <table class="table" style="margin-top: 50px; background-color:rgb(3, 3, 26)">
                
                <thead style="font-size: 1.5rem;color:bisque">
                    
                    <tr>

                        <th>Image</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                        <th>Action</th>
                        
                    </tr>
                    </tr>
                </thead>

                <tfoot style="font-size: 1.5rem;color:rgb(25, 197, 197)">
                    
                 </tfoot>

                  <tbody style="font-size: 0.8rem;font-family:aharoni;text-align:center">
                    @php
                        $total = 0;
                    @endphp
                    @foreach ($show_card as $item)
                    <tr class="vieux">
                        <td><img src="{{asset('produit/'.$item->produit->photo)}}" alt="" width="70px" height="50px" class="imgd"></td>

                        <td style="color:rgb(255, 0, 64) ;font-size:2rem">{{$item->produit->nom_pro}}</td>
                        <td style="color:rgb(27, 30, 233) ;font-size:2rem">$ {{$item->produit->prix_pro}}</td>
                        <td style="color:rgb(37, 203, 224);font-size:2rem">
                            <button type="button" class="decrement tagx" style="border:none;width: 45px;color:bisque;background-color:rgb(4, 11, 31)">-</button>
                              <input type="number" value="{{$item->qt}}" class="qt_p"  style="width: 32px;text-align:center">
                              <button type="button" class="increment tagx" style="border:none;width: 45px;color:bisque;background-color:rgb(4, 11, 31)">+</button>
                        </td>
                        <td style="color: rgb(211, 208, 18) ;font-size:2rem;" class="kolx">$ {{$item->produit->prix_pro*$item->qt}}</td>

                        <td>
                            <a href="#" onclick="dell_pro_card({{$item->id}})" style="font-size:2rem;color:deeppink" ><i class="fa-solid fa-trash-can"></i></a>
                           
                        </td>
                    <input type="hidden" value="{{$item->id}}" class="id_panier">

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
                               <td style="color: chartreuse"><h3>$ {{$total}}</h3></td>

                            @endif    
                     
                    </tr>
  
                    
                  </tfoot>
            </table>
            <tr>
                <a href="{{url('card_final')}}" style="color:rgb(4, 11, 31);margin-left: 3px ; margin-top:12px; font-size:4rem"><i class="fa-solid fa-file-export"></i></a>
            
              </tr>
        </div>
       </div>
    </div>

    <script>
       
        $(".decrement").on('click',function(){
           var decre = $(this).closest('.vieux').find('.qt_p').val();
           var convertisseur = parseInt(decre,10);
            convertisseur = isNaN(decre) ? 0:convertisseur;
    
            if(convertisseur > 1){
                convertisseur--;
                $(this).closest('.vieux').find('.qt_p').val(convertisseur);
                 
            }
     });
    
     $(".increment").on('click',function(){
           var incre = $(this).closest('.vieux').find('.qt_p').val();
           var convertisseur = parseInt(incre,10);
            convertisseur = isNaN(incre) ? 0:convertisseur;
            if(convertisseur < 10){
                convertisseur++;
                $(this).closest('.vieux').find('.qt_p').val(convertisseur);
                
            }
     });
    
       $(".tagx").on('click',function(){
             var quantite = $(this).closest('.vieux').find('.qt_p').val();
            var id_panier = $(this).closest('.vieux').find('.id_panier').val();
            
            $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
            $.ajax({
                type:"post",
                url:"{{url('update_panier')}}",
                data:{
                    'quantite':quantite,
                    'id_panier':id_panier,
                },
                success:function(response){
                     
                }
            });
           
       });
    
    </script>