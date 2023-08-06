<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Free download Transparent login form using html and css</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Transparent login form using html and css" />
<meta name="keywords" content="Transparent login form, login form, HTML, css, Background Blur, login form using html and css, Avatar Icon, Login With Facebook, Login with Google" />
<meta name="author" content="HTMLCSS3TUTORIALS" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
  crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{asset('loga/css/style.css')}}" />
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="blur"></div>
<div class="formContent blur" style="margin-top: 35px"> <img src="{{asset('loga/images/avtar.jpg')}}" class="avatarImg">
		<h2>Login</h2>

		<div class="container">
            <div class="content">
                <div class="row">
                    <form method="POST" id="logox">
                          <div class="notif5"></div>
            
                           
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Enter Email" required>
            
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Enter Password" required>
            
                             <button type="button" class="form-control" onclick="login()">Login</button>

                            <div class="remember">
                                    <div class="login"><div class="Oroption">OR</div></div>
                                    <div class="links">
                                            <div class="facebook"><img src="{{asset('loga/images/facebook.png')}}" alt="Facebook Icon" /> </div>
                                            <div class="google"> <img src="{{asset('loga/images/google.png')}}" alt="Facebook Icon" /> </div>
                                    </div>
                                    <div class="signup"> Don't have account? <a href="{{url('formulaire_user')}}">Signup Now</a> </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
</div>
<script src="{{asset('js/jquery-1.12.4.min.js')}}"></script> 

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
 integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
 integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script>
    function login(){
       var formdata = new FormData($("#logox")[0]);
       $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
       $.ajax({
         type:"post",
         url:"{{url('login')}}",
         data:formdata,
         processData:false,
         contentType:false,
         success:function(response){
            console.log(response);
              if(response.status==300){
                $(".notif5").html(response.message).addClass('alert alert-danger');

              }else{
                  window.location.href="{{url('/')}}";
              }
         }
       });
    }
 </script>

</body>
</html>