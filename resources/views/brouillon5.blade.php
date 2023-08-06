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




@section('content')

@php
$total = 0;

@endphp

<table class="table">
    
    <td style="color:aliceblue">{{$ox->id}}</td>
   
</table>

    @foreach ($xx as $item)
<tr>
    <td style="color: aliceblue">{{$item->total_list}}</td>
    
     
</tr>

@php
    $total = $item->total_list;
@endphp
@endforeach


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
          
             <div class="card-body">
               <div class="col-md-5 col-lg-10 order-md-last">
   
               
                  <!--    ADRESSE USER VRAI     -->
                  <br><br><br><br>
                  <div class="card-title"  style="font-family:aharoni;font-size:4rem"><h2>Personal Data of the Holder of the Bank Card:</h2></div>

           
                  <br><br>
                   <form method="POST" id="edson">

                    <div class="group-control">
                       
                        <input type="hidden" name="id_user" value="{{session('info_user')[0]->id}}" class="form-control id_user"><br>
                    </div>

                    <div class="group-control">
                       
                        <input type="hidden" name="id_list_con" class="form-control listo"><br>
                    </div>

                   <div class="group-control">
                       <label for="">Firstname*</label>
                       <input type="text" name="firstname" class="form-control firstname"><br>
                   </div>
   
                
   
                   <div class="group-control">
                       <label for="">Email*</label>
                       <input type="email" name="email" class="form-control email"><br>
                   </div>
   
                   <div class="group-control">
                       <label for="">Cpf*</label>
                       <input type="text" name="cpf" id="cpf" class="form-control cpf"><br>
                   </div>
   
                   <div class="group-control">
                       <label for="">Date of Birth*</label>
                       <input type="date" name="nacimento" id="dates" class="form-control nacimento"><br>
                   </div>

                   <div class="group-control">
                    <label for="">Country*</label>
                    <input type="text" name="country" class="form-control country"><br>
                </div>
   
                   <div class="group-control">
                       <label for="">State*</label>
                       <input type="text" name="state" class="form-control state"><br>
                   </div>

                   <div class="group-control">
                    <label for="">city*</label>
                    <input type="text" name="city" class="form-control city"><br>
                </div>

                <div class="group-control">
                    <label for="">District*</label>
                    <input type="text" name="district" class="form-control district"><br>
                </div>

                <div class="group-control">
                    <label for="">Apt_Number*</label>
                    <input type="text" name="num_apt" class="form-control num_aprt"><br>
                </div>

                <div class="group-control">
                    <label for="">Street*</label>
                    <input type="text" name="street" class="form-control street"><br>
                </div>

                <div class="group-control">
                    <label for="">Zipcode*</label>
                    <input type="text" name="zipcode"  class="form-control zipcode"><br>
                </div>

                <div class="group-control">
                    <label for="">Currency*</label>
                    <input type="text" name="currency"  class="form-control currency"><br>
                </div>

                <div class="group-control">
                    <label for="">DDD*</label>
                    <input type="text" name="ddd" class="form-control ddd"><br>
                </div> 

                <div class="group-control">
                    <label for="">Tel*</label>
                    <input type="text" name="tel" class="form-control tel"><br>
                </div> 
   
                 <br><br>
                
                  <div class="card-title"  style="font-family:aharoni;font-size:4rem"><h2>Bank Data:</h2></div>
                 <!--    ADRESSE DE USER COMPLEMENTAIRE      -->

                
   
              <br>
              
              <div class="col-md-3 col-lg-6 order-md-last">
                <div class="group-control">
                    
                    <input type="text" name="hashseller" class="hashseller" style="margin-left:-15px">
                </div>

                
               
                       <div class="group-control">
                           <label for=""  style="margin-left:-15px">Your credit card number*</label>
                           <input type="text" name="ncredito" class="form-control ncredito" style="margin-left:-15px" value="4111111111111111">
                       </div>
       
                       <div class="group-control">
                           <label for=""  style="margin-left:-15px">CVV*</label>
                           <input type="text" name="ncvv"  class="form-control ncvv" style="margin-left:-15px">
                       </div>
       
                       <div class="group-control">
                           <label for=""  style="margin-left:-15px">Expiration Month*</label>
                           <input type="number" name="mesexp" class="form-control mesexp" style="margin-left:-15px">
                       </div>
                       <div class="group-control">
                           <label for="" style="margin-left:-15px">Expiry Year*</label>
                           <input type="number" name="anoexp" class="form-control anoexp" style="margin-left:-15px">
                       </div>  
   
                </div>         
   
   
                <!--    ADRESSE DE LIVRAISON      -->
               
   
                <div class="col-md-6 col-lg-6 order-md-last">
                    <div class="group-control">
                      
                        <input type="text" name="bandeira" class="bandeira" style="margin-left:-15px">
                    </div>

                   
                    
                   <div class="group-control">
                       <label for=""  style="margin-left:-15px">Cardholder Name*</label>
                       <input type="text" name="nomecartao"  class="form-control nomecartao" style="margin-left:-15px">
                   </div>
   
                   <div class="group-control">
                       <label for=""  style="margin-left:-15px">Slice*</label>
                       <input type="text" name="nparcela"  class="form-control nparcela" style="margin-left:-15px" >
                   </div>
                   <div class="group-control">
                       <label for="" style="margin-left:-15px">Total value*</label>
                       <input type="text" name="totalfinal" class="form-control totalfinal" style="margin-left:-15px" value="{{$total}}" readonly="">
                   </div>  

                   <div class="group-control">
                    <label for="" style="margin-left:-15px">Value per Installment*</label>
                    <input type="text" name="totalparcela" class="form-control totalparcela" style="margin-left:-15px">
                </div> 

                   <div class="group-control">
                    <label for="" style="margin-left:-15px">Total value plus tax*</label>
                    <input type="text" name="totalapagar" class="form-control totalapagar" style="margin-left:-15px">
                </div>  
           
   
            </div>    
   
            <div class="form-group">
               
                <button type="button" class="btn btn-info pagar">Pagar</button>
               </div>
   
         </form>
               </div>
             </div>
           </div>
       
                 <!--    TABLE INFO     -->
   
   
     
       
     
          </div>
      </div>
      
        
       </body>
   
  

  <br><br><br><br>



  @section('scripts')
  <script type="text/javascript" src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
  
  <script>
     $(function(){
        $('#cpf').mask('000.000.000-00');
        
     });
  </script>

  
   <script>
    function carregar(){
     PagSeguroDirectPayment.setSessionId('{{$sessionID}}');
       
    }

$(function(){
    carregar()
        $(".ncredito").on('blur',function(){
               PagSeguroDirectPayment.onSenderHashReady(function(response){
                     if(response.status =='error'){
                        console.log(response.message);
                        return false;
                     }

                     var hash = response.senderHash;
                     $(".hashseller").val(hash);  
                     
           });

            let ncartao = $(this).val();
            $(".bandeira").val("");
            if(ncartao.length > 6){
                let prefixcartao = ncartao.substr(0, 6);
                PagSeguroDirectPayment.getBrand({
                cardBin : prefixcartao,
                success:function(response){
                    $(".bandeira").val(response.brand.name);
                },
                error:function(response){
                    alert("numero do cartao invalido!!");
                   
                }
                });
            }
             
       });

       $(".nparcela").on('blur',function(){
                var bandeira = $(".bandeira").val();
                var totalparcelas = $(this).val();
                 
                  if(bandeira == ""){
                    alert("Prencha o numero do cartao valido!!");
                    return;
                  }
            PagSeguroDirectPayment.getInstallments({
            amount:$(".totalfinal").val(),
            maxIntallmentNoInterest:2,
            brand:bandeira,
            success:function(response){
            console.log(response); 
            let status = response.error;
            if(status){
                alert("nao foi encontrado opçao de parcelamento!");
                return;
                  }  

                    let indice = totalparcelas - 1;
                    let totalapagar = response.installments[bandeira][indice].totalAmount;
                    let valorTotalParcela = response.installments[bandeira][indice].installmentAmount;
                    
                    $(".totalparcela").val(valorTotalParcela);
                    $(".totalapagar").val(totalapagar);

            }
            
        });
    });

    //recuperer id_list
     $(".table").each(function(){
      var  id_list_com = $(this).find('td').eq(0).html();
         $(".listo").val(id_list_com );
        
     });
         //recuperer data carte bancaire!!
        $(".pagar").on('click',function(){
            
               var numerocartao = $(".ncredito").val();
               var iniciocartao = numerocartao.substr(0, 6);
               var ncvv = $(".ncvv").val();
               var anoexp = $(".anoexp").val();
               var mesexp = $(".mesexp").val();
               var hashseller = $(".hashseller").val();
               var bandeira = $(".bandeira").val();
               var totalfinal = $(".totalfinal").val();
               var totalparcela = $(".totalparcela").val();
              // var ncredito = $(".ncredito ").val(),
               //alert(totalparcela);

               //data personnel titulaire
               var firstname = $(".firstname").val();
               var name = $(".nomecartao").val();
               var email = $(".email").val();
               var cpf = $(".cpf").val();
               var ddd = $(".ddd").val();
               var tel = $(".tel").val();
               var nacimento = $(".nacimento").val();

               //adress titulaire cart
               var country = $(".country").val();
               var state = $(".state").val();
               var city = $(".city").val();
               var district = $(".district").val();
               var num_apt = $(".num_aprt").val();
               var street = $(".street").val();
               var codzip = $(".zipcode").val();
               var currency = $(".currency").val();

               //data produit
              // var id_list_com = $(".listo").val(id_list_com);
              
               //data user(client)
               var id_user = $(".id_user").val();
             

              

               PagSeguroDirectPayment.createCardToken({
                    
                    cardNumber : numerocartao,
                    brand : bandeira,
                    cvv : ncvv,
                    expirationMonth : mesexp,
                    expirationYear : anoexp,
                    success:function(response){
                       //alert("Token da transacçao recuperado com successo!!");
                       console.log(response);
                       $.post("{{route('pagar_success')}}",{
                        hashseller : hashseller,
                        cardtoken : response.card.token,

                        numerocartao : $(".ncredito ").val(),
                         ncvv : $(".ncvv").val(),
                          anoexp : $(".anoexp").val(),
                          mesexp : $(".mesexp").val(),
                         bandeira : $(".bandeira").val(),
                        nparcela : $(".nparcela").val(),
                        totalapagar : $(".totalapagar").val(),
                        totalparcela :$(".totalparcela").val(),
                        id_list_com : $(".listo").val(),
                        id_user   : $(".id_user").val(),
                        currency : $(".currency").val(),
                        totalfinal : $(".totalfinal").val(),
                        hashseller : $(".hashseller").val(),

                         firstname : $(".firstname").val(),
                         nomecartao : $(".nomecartao").val(),
                        ddd : $(".ddd").val(),
                        tel : $(".tel").val(),
                        cpf : $(".cpf").val(),
                        email : $(".email").val(),

                             country : $(".country").val(),
                             state : $(".state").val(),
                             city : $(".city").val(),
                             district : $(".district").val(),
                             num_apt : $(".num_aprt").val(),
                             street : $(".street").val(),
                             codzip : $(".zipcode").val(),
                             nacimento : $(".nacimento").val()
                             

                       }
                       ,function(result){
                          //alert("eyon");
                         console.log(result.message);
                       });
                    },
                       error:function(err){
                           alert("nao pude buscar o token do cartao, verifique todos os campos!! ");
                           console.log(err);
                       }
               });
        });

   });

   </script>
 
@endsection

@endsection