<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body style="background-color: rgb(2, 8, 22)">
  @include('menu') 
   @include('modal1')
  <div class="page">
   <button type="button" class="btn btn-info mt-5" onclick="create_cat()">Add_Cat</button>
   <button type="button" class="btn btn-primary mt-5" onclick="show_cat()">show_Cat</button>
   <button type="button" class="btn btn-success mt-5" onclick="restore_cat()">Rest_Cat</button>
   <button type="button" class="btn btn-dark mt-5" onclick="create_pro()">Add_Prod</button>
   <button type="button" class="btn btn-danger mt-5" onclick="show_pro()">Show_Prod</button>
   <button type="button" class="btn btn-dark mt-5" onclick="restore_pro()">Rest_Prod</button>



  </div>
  
  

<script src="http://code.jquery.com/jquery-1.11.1.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
 integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
 integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 <meta name="csrf-token" content="{{ csrf_token() }}">

  <script>
    function create_cat(){
      $.get("{{url('formulaire_categorie')}}",{},function(data,status){
          $("#vox").html(data);
          $("#general1").modal('show');
      });
    }
  </script>

  <script>
    function add_cat(){
       var formdata = new FormData($("#cato")[0]);
       $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        $.ajax({
            type:"post",
            url:"{{url('add_categorie')}}",
            data:formdata,
            processData:false,
            contentType:false,
            success:function(response){
               if(response.status==200){
                $(".notif1").html(response.message).addClass('alert alert-success');

               }else{
                $(".notif1").html('Error!!').addClass('alert alert-danger');

               }
            }
        });
    }
  </script>

<script>
  function show_cat(){
    $.get("{{url('Show_categorie')}}",{},function(data,status){
       $(".page").html(data);
    });
  }
</script>

<script>
   function edit_cat(id){
     $.get("{{url('edit_categorie')}}/"+id,{},function(data,status){
       $("#vox").html(data);
       $("#general1").modal('show');
     });
   }
</script>

<script>
    function delete_cat(id){
        $.get("{{url('delete_categorie')}}/"+id,{},function(){
            show_cat();
    });
     }
</script>



<script>
  function restore_cat(){
    $.get("{{url('restore_categorie')}}",{},function(){
      show_cat();
    });
  }
</script>

<script>
  function create_pro(){
    $.get("{{url('formulaire_produit')}}",{},function(data){
           $("#vox").html(data);
           $("#general1").modal('show');
    });
  }
</script>


<script>
   function add_pro(){
     var formdata = new FormData($("#catix")[0]);
     $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

     $.ajax({
         type:"post",
         url:"{{url('add_produit')}}",
         data:formdata,
         processData:false,
         contentType:false,
         success:function(response){
            if(response.status==200){
                 $(".notif2").html(response.message).addClass('alert alert-success');
            }else{
              $(".notif2").html('Error').addClass('alert alert-danger');

            }
         }
     });
   }
</script>

<script>
    function show_pro(){
      $.get("{{url('show_produit')}}/",{},function(data){
        $(".page").html(data);
             
      });
    }
</script>

<script>
  function edit_pro(id){
      $.get("{{url('edit_produit')}}/"+id,{},function(data){
        $("#vox").html(data);
        $("#general1").modal('show');
      });
      }
</script>

<script>
  function update_pro(id){
    var formdata = new FormData($("#catox")[0]);
    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

    $.ajax({
        type:"post",
        url:"{{url('update_produit')}}/"+id,
        data:formdata,
        processData:false,
        contentType:false,
        success:function(response){
           if(response.status==200){
                $(".notif3").html(response.message).addClass('alert alert-success');
           }else{
             $(".notif3").html('Error').addClass('alert alert-danger');

           }
        }
    });
  }

  
</script>

<script>
   function delete_pro(id){
    $.get("{{url('delete_produit')}}/"+id,{},function(){
      show_pro();
    });
   }
</script>

<script>
   function restore_pro(){
    $.get("{{url('restore_produit')}}",{},function(data){
     
       show_pro();
  });
   }
</script>

<script>
  $(function(){
      function del_gallery(id){
       $(".delo_gal").on("click",function(){
          var del = $(this).attr("data-imo");

          $.ajax({
               type:"get",
               url:"{{url('delete_gallery')}}/"+del,
               success:function(response){
                  show_pro();
               }
          });
             
       });
      
  }
  });
</script>
</body>
</html>