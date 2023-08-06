@section('scripts')
<script type="text/javascript" src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
<script>
    function carregar(){
        PagSeguroDirectPayment.setSessionId('{{$ambroise}}')
    }
    $(function(){
        carregar()
       $('.ncredito').on('blur',function(){
        PagSeguroDirectPayment.onSenderHashReady(function(response){
            if(response.status=="error"){
                console.log(response.message)
                return false;
            }
            var hash=response.senderHash;
            $('.hashseller').val(hash);
        })
        let ncartao=$(this).val();
        if(ncartao.length>6){
        let prefixcartao=ncartao.substr(0,6);
        PagSeguroDirectPayment.getBrand({
            cardBin:prefixcartao,
            success:function(response){
              $('.bandeira').val(response.brand.name);
            },
            error:function(response){
                alert("o numero do cartão é invalido");
                $('.bandeira').val("");
            }
        })
        }else{
            $('.bandeira').val("");  
        }
       })
       $('.nparcela').on('blur',function(){
        var bandeira= $('.bandeira').val();;
        var totalparcela=$(this).val();
        if(bandeira==""){
            alert("preenche o numero do cartao valido");
            return;
        }
        PagSeguroDirectPayment.getInstallments({
            amount:$('.totalfinal').val(),
            maxIntallmentNoInterest:2,
            brand:bandeira,
            success:function(response){
                console.log(response);
                let status=response.error;
                if(status){
                    alert("nao foi encontrado opçao da parcela");
                }
                let index=totalparcela-1;
                let totalapagar=response.installments[bandeira][index].totalAmount;
                let valortotalapagar=response.installments[bandeira][index].installmentAmount;
                $('.totalparcela').val(valortotalapagar);
                $('.totalapagar').val(totalapagar);
                

            }
        })

       })
       $('.pagar').on('click',function(){
        var numerocartao=$('.ncredito').val();
        var iniciodocartao=numerocartao.substr(0,6);
        var ncvv=$('.ncvv').val();
        var anoexp=$('.anoexp').val();
        var mesexp=$('.mesexp').val();
        var hashseller=$('.hashseller').val();
        var bandeira=$('.bandeira').val();
        var nomecartao=$('.nomecartao').val();
        PagSeguroDirectPayment.createCardToken({
            cardNumber:numerocartao,
            brand:bandeira,
            cvv:ncvv,
            expirationMonth:mesexp,
            expirationYear:anoexp,
            success:function(response){
            $.post("{{route('pagar_conta')}}",
            {
                hashseller:hashseller,
                cardtoken:response.card.token,
                ncredito:numerocartao,
                ncvv:ncvv,
                mesexp:mesexp,
                anoexp:anoexp,
                nparcela:$('.nparcela').val(),
                totalparcela:$('.totalparcela').val(),
                totalfinal:$('.totalfinal').val(),
                totalfinal:$('.totalfinal').val(),
                totalapagar:$('.totalapagar').val(),
                nomecartao:$('.nomecartao').val(),

            },
            

                function(result){
                alert(result.message);
            });
            },
            error:function(err){
                alert('token nao pode ser gerado')
                console.log(err);

            } 
         


        })
       })
    })
</script>
@endsection