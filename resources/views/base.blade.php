

<!DOCTYPE >
<html>
   <head>
      <meta charset="UTF-8">
      <title>Chamb - Responsive E-commerce HTML5 Template</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
     
      <!--enable mobile device-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--fontawesome css-->
      <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
      <!--bootstrap css-->
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

      <!--animate css-->
      <link rel="stylesheet" href="{{asset('css/animate-wow.css')}}">
      <!--main css-->
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/slick.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
      <!--responsive css-->
      <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
       integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
       crossorigin="anonymous" referrerpolicy="no-referrer" />
       <meta name="csrf-token" content="{{ csrf_token() }}">
      @yield('css')
   </head>
   <body>
      <header id="header" class="top-head">
         <!-- Static navbar -->
         <nav class="navbar navbar-default">
            <div class="container-fluid">
               <div class="row">

                  <div class="col-md-4 col-sm-12 left-rs">
                     

                <div class="navbar-header">
                        <button type="button" id="top-menu" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"> 
                        <span class="sr-only">Toggle navigation</span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        </button>
                        <a href="{{url('/')}}" class="navbar-brand"><img src="{{asset('images/logo.png')}}" alt="" /></a>
                     </div>
                   
                    

                     <form class="navbar-form navbar-left web-sh">
                        <div class="form">
                           <input type="text" class="form-control" placeholder="Search for products or companies">
                        </div>
                        <a href="{{url('card_vrai')}}"> <div class="form"  style="margin-top:-30px;color:rgb(4, 11, 31);margin-left: 350px;font-size:2.5rem"><i class="fa-sharp fa-solid fa-cart-plus" id="hia"></i>
                        </div></a>
  

                     </form>
                     
                       
                      </div>

                      
                  
                      <div class="col-md-8 col-sm-12">
                     <div class="right-nav">
                        <div class="login-sr">
                           <div class="login-signup">
                              <ul>
                                  @if (session('info_user'))
                                    <li><a href="{{url('formulaire_log')}}" style="font-family: Matura MT Script Capitals;color:rgb(5, 102, 57);font-size:3rem;box-shadow: 0 25px 25px rgba(4, 60, 70, 0.885);background-color:rgb(2, 19, 31)">{{session('info_user')[0]->name}}♣</a></li>
                                     @else
                                     <li><a href="{{url('formulaire_log')}}">Login</a></li>
                                     
                                      
                                  @endif
                                    @if (session('info_user'))
                                       <li><a class="custom-b" href="#" onclick="destroy_session()">Sign out</a></li>
                                    @else
                                    <li><a class="custom-b" href="{{url('formulaire_user')}}">Sign up</a></li>
                                        
                                    @endif
                              </ul>
                           </div>
                        </div>
                        <div class="help-r hidden-xs">
                           <div class="help-box">
                              <ul>
                                 
                                 <li> <a data-toggle="modal" data-target="#myModal" href="#"> <span>Change</span> <img src="{{asset('images/flag.png')}}" alt="" /> </a> </li>

                                 @if(session('info_user'))
                                 <li> <a href="{{url('all_commande')}}"><img class="h-i" src="{{asset('images/help-icon.png')}}" alt="" /> My Order </a> </li>
                                    @else
                                     <li> <a href="#"><img class="h-i" src="{{asset('images/help-icon.png')}}" alt="" /> Help </a> </li>

                                 @endif
                              </ul>
                           </div>
                        </div>
                        <div class="nav-b hidden-xs">
                           <div class="nav-box">
                              <ul>
                                 @if(session('info_user'))
                                 <li><a href="howitworks.html"><i class="fa-sharp fa-solid fa-heart count_switcho" style="font-size:2.5rem;color:rgb(7, 15, 17)"></i></a></li>
                                    @else
                                    <li><a href="{{url('formulaire_log')}}"><i class="fa-sharp fa-solid fa-heart" style="font-size:2.5rem;color:rgb(7, 15, 17)"></i></a></li>
   
                                 @endif
                                 <li><a href="{{url('formulare_guide')}}">How it works</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--/.container-fluid --> 
         </nav>
      </header>
       @yield('content')
       @include('modal1')  
      <footer>
         <div class="main-footer">
            <div class="container">
               <div class="row">
                  <div class="footer-top clearfix">
                     <div class="col-md-2 col-sm-6">
                        <h2>Start a free
                           account today
                        </h2>
                     </div>
                     <div class="col-md-6 col-sm-6">
                        <div class="form-box">
                           <input type="text" placeholder="Enter yopur e-mail" />
                           <button>Continue</button>
                        </div>
                     </div>
                     <div class="col-md-4 col-sm-12">
                        <div class="help-box-f">
                           <h4>Question? Call us on 12 34 56 78 for help</h4>
                           <p>Easy setup - no payment fees - up to 100 products for free</p>
                        </div>
                     </div>
                  </div>
                  <div class="footer-link-box clearfix">
                     <div class="col-md-6 col-sm-6">
                        <div class="left-f-box">
                           <div class="col-sm-4">
                              <h2>SELL ON chamb</h2>
                              <ul>
                                 <li><a href="#">Create account</a></li>
                                 <li><a href="howitworks.html">How it works suppliers</a></li>
                                 <li><a href="pricing.html">Pricing</a></li>
                                 <li><a href="#">FAQ for Suppliers</a></li>
                              </ul>
                           </div>
                           <div class="col-sm-4">
                              <h2>BUY ON chamb</h2>
                              <ul>
                                 <li><a href="#">Create account</a></li>
                                 <li><a href="#">How it works buyers</a></li>
                                 <li><a href="#">Categories</a></li>
                                 <li><a href="#">FAQ for buyers</a></li>
                              </ul>
                           </div>
                           <div class="col-sm-4">
                              <h2>COMPANY</h2>
                              <ul>
                                 <li><a href="about-us.html">About chamb</a></li>
                                 <li><a href="#">Contact us</a></li>
                                 <li><a href="#">Press</a></li>
                                 <li><a href="#">Careers</a></li>
                                 <li><a href="#">Terms of use</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-6">
                        <div class="right-f-box">
                           <h2>INDUSTRIES</h2>
                           <ul class="col-sm-4">
                              <li><a href="#">Textiles</a></li>
                              <li><a href="#">Furniture</a></li>
                              <li><a href="#">Leather</a></li>
                              <li><a href="#">Agriculture</a></li>
                              <li><a href="#">Food & drinks</a></li>
                           </ul>
                           <ul class="col-sm-4">
                              <li><a href="#">Office</a></li>
                              <li><a href="#">Decoratives</a></li>
                              <li><a href="#">Electronics</a></li>
                              <li><a href="#">Machines</a></li>
                              <li><a href="#">Building</a></li>
                           </ul>
                           <ul class="col-sm-4">
                              <li><a href="#">Cosmetics</a></li>
                              <li><a href="#">Health</a></li>
                              <li><a href="#">Jewelry</a></li>
                              <li><a href="#">See all here</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-8">
                     <p><img width="90" src="{{asset('images/logo.png')}}" alt="#" style="margin-top: -5px;" /> All Rights Reserved. Company Name © 2018</p>
                  </div>
                  <div class="col-md-4">
                     <ul class="list-inline socials">
                        <li>
                           <a href="">
                              <i class="fa-brands fa-facebook" aria-hidden="true"></i>
                           </a>
                        </li>
                        <li>
                           <a href="">
                              <i class="fa-brands fa-square-twitter" aria-hidden="true"></i>
                           </a>
                        </li>
                        <li>
                           <a href="">
                              <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <i class="fa-brands fa-linkedin-in" aria-hidden="true"></i>
                           </a>
                        </li>
                     </ul>
                     <ul class="right-flag">
                        <li><a href="#"><img src="{{asset('images/flag.png')}}" alt="" /> <span>Change</span></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </footer>

      <script src="{{asset('js/jquery-1.12.4.min.js')}}"></script> 

      <!--bootstrap js--> 
      <script src="{{asset('js/bootstrap.min.js')}}"></script> 
      <script src="{{asset('js/bootstrap-select.min.js')}}"></script>
      <script src="{{asset('js/slick.min.js')}}"></script> 
      <script src="{{asset('js/select2.full.min.js')}}"></script> 
      <script src="{{asset('js/wow.min.js')}}"></script>
      <script src="{{asset('js/jquery-ui.js')}}"></script> 
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

      <!--custom js--> 
      <script src="{{asset('js/custom.js')}}"></script>
      <script src="{{asset('js/jquery.nicescroll.min.js')}}"></script> 


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
    

   <script>
       function destroy_session(){
         $.ajax({
                   type:"get",
                   url:"{{url('destroy_session')}}",
                   success:function(response){
                     window.location.href="{{url('/')}}";
                   }
         });
       }
   </script>


 <script>
      function card(){
         var formdata = new FormData($("#lovax")[0]);
         $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
                $.ajax({
                  type:"POST",
                  url:"{{url('addpanier')}}",
                  data:formdata,
                  processData:false,
                  contentType:false,
                  success:function(response){
                     console.log(response);
                    if(response.status==200){
                     $("#vox").html(response.message).addClass('alert alert-success');
                     $("#general1").modal('show');
                    // count_card()
                     //count_switch()
                     
                     
                    }else{
                    if(response.status==300){
                     window.location.href="{{url('formulaire_log')}}";

                    }
                  }
                  }
                });
      }

 </script>

<script>
          function count_card(){
                           $.ajax({
                            type:"get",
                            url:"{{url('count_card')}}",
                            success:function(response){
                              $("#hia").html("");
                              $("#hia").html(response);
                              show_card()
                              //count_switch()
                              
                             
                            }
                         });

    
                        }
</script>

<script>
    $(document).ready(function(){
      count_card()
      show_card()
      
      

    });
</script>

<script>
      
         function show_card(){
            $.get("{{url('show_card')}}",{},function(data){
        $("#card_vrai").html(data);
        count_card()
        count_switch()
        
       
     });
         }
      
</script>

<script>
   function dell_pro_card(id){
      $.get("{{url('delete_pro_panier')}}/"+id,{},function(){
         count_card()
         show_card()
         count_switch()
         
         
      });
   }
</script>

<script>
   function add_commande(){
         var formdata = new FormData($("#edson")[0]);
         $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

         $.ajax({
               type:"post",
               url:"{{url('add_commande')}}",
               data:formdata,
               processData:false,
               contentType:false,
               success:function(response){
                  console.log(response);
                  window.location.href="{{url('show_commande_uniq')}}";
                 // count_switch()
                  
                  
               }
         });
   }
</script>

<script>
     function like(id){
        $.ajax({
            type:"get",
            url:"{{url('like_add')}}/"+id,
            success:function(response){
            console.log(response);
            if(response.status==200){
           $("#vox").html(response.message).addClass('alert alert-success');
           $("#general1").modal('show');
          // $('#pcount').text(response.count);
           //count_card()
           //count_switch()
   
   
        }else{
  
   window.location.href="{{url('formulaire_log')}}";

  
     }
   }
        });
     }
</script>

<script>
   function like2(id){
      $.ajax({
          type:"get",
          url:"{{url('like_add2')}}/"+id,
          success:function(response){
            console.log(response);
           if(response.status==200){
           $("#vox").html(response.message).addClass('alert alert-success');
           $("#general1").modal('show');
           $('#pcount').text(response.count);
           //count_card()
           //count_switch()
   
   
  }else{
  
   window.location.href="{{url('formulaire_log')}}";

  
   }
  }
      });
   }

     
</script>

<script>

   $(function(){
       
       count_switch()
   });
   
</script>



<script>
   function count_switch(){
    $.ajax({
      type:"get",
      url:"{{url('count_switch')}}",
      success:function(response){
         $(".count_switcho").html("");
         $(".count_switcho").html(response);
         
         console.log(response);
      }
    });
  }
</script>

 <script>
    
        $(function(){
            $(".clico").on('click',function(){
              id_cat = $(this).attr('value')[0];
              $.get("{{url('filtr_pro_idcat')}}/"+id_cat,{},function(data){
              $(".pro_original").remove();
              $(".charg_pro_cato1").html(data);
                
             // $(".daho_original").remove();
             // $(".charger_devo").html(data);
       });
            });
        });
    
 </script>


  <script>
     $(function(){
          $(".filtro_cat").on('click',{},function(){
            var id_cat2 = $(this).val();
          //  $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
               // alert(id_cat2);
            $.get("{{url('filtr_checkbox_pro_cat')}}/"+id_cat2,{},function(data){
               $(".pro_original").remove();
               $(".cheko_charge1").html(data);
               console.log(data);
             });
          });
     });
  </script>

<script>
   $( function() {
      $( "#slider-range" ).slider({
         range: true,
         min: 0,
         max: 2000,
         values: [ 158, 5000],
         slide: function( event, ui ) {
            //recuperer les valeurs....
            var min = ui.values[ 0 ];
            var max = ui.values[ 1 ];
            $( "#amount" ).val(min + ' - '+ max);
            $.post("{{route('filter_price')}}",{min:min,max:max},function(data){
               $(".pro_original").remove();
               $(".cheko_charge1").html(data);
               console.log(data);
            });
         }
       
      });
     // $( "#amount" ).val( "$" + $( "#slider-range" ).slider(min) + " - $" + $( "#slider-range" ).slider(max) );
   } );
</script>

<script>
   function changeimage(image){
      var contenue= document.getElementById("principal");
      contenue.src=image.src;
   }
</script>
<script src="{{asset('js/jquery.nicescroll.min.js')}}"></script> 
 
<script>
   $(document).ready(function() {
     $("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#ededed",boxzoom:true}); // First scrollable DIV
   });
</script>


<script>
     function card2(id){
      $.ajax({
             type:"get",
             url:"{{url('add_card2')}}/"+id,
             success:function(response){
                  console.log(response);
                 if(response.status==200){
                  $("#vox").html(response.message).addClass('alert alert-success');
                  $("#general1").modal('show');
                  //count_card()
                  //count_switch()
                  
                  
                 }else{
                 
                  window.location.href="{{url('formulaire_log')}}";

                 
               }
               }
      });
     }
</script>

@yield('scripts')
   </body>
</html>