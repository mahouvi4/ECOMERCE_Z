<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <style>
        table{
               box-shadow: 0 25px 25px rgba(224, 11, 118, 0.885);
        }

        img{
            border-radius : 75px;
        }
    </style>
</head>
<body style="background-color: rgba(3, 1, 14, 0.932)">
 <div class="fox"></div>
    @include('modal1')
    <div class="container">
       <div class="content">
        <div class="row">
            <table class="table" style="margin-top: 50px; background-color:rgb(3, 3, 26)">
                
                <thead style="font-size: 1.5rem">
                    
                    <tr>
                        <th><button type="button" class="btn btn-danger golax"></button></th>
                        <th>Product</th>
                        <th>Reference</th>
                        <th>Price</th>
                        <th>Descount</th>
                        <th>Stock</th>
                        <th>Status</th>
                        <th>Popularity</th>
                        <th>Images</th>
                        <th>Gallery</th>
                        <th>Action</th>
                    </tr>
                </thead>

                 <tfoot style="font-size: 1.5rem">
                    <tr>
                        <th><button type="button" class="btn btn-danger golax"></button></th>

                        <th>Product</th>
                        <th>Reference</th>
                        <th>Price</th>
                        <th>Descount</th>
                        <th>Stock</th>
                        <th>Status</th>
                        <th>Popularity</th>
                        <th>Images</th>
                        <th>Gallery</th>
                        <th>Action</th>
                    </tr>
                 </tfoot>

                  <tbody style="font-size: 0.8rem;font-family:aharoni">
                    @foreach ($show_pro as $item)
                    <tr>
                        <td><input type="checkbox" value="{{$item->id}}" class="delete_multiple_x"></td>
                        <td style="color:bisque">{{$item->nom_pro}}</td>
                        <td style="color:rgb(236, 71, 173)">{{$item->ref_pro}}</td>
                        <td style="color:rgb(27, 30, 233)">$ {{$item->prix_pro}}</td>
                        <td style="color:rgb(37, 203, 224)">{{$item->desconte_pro}}%</td>
                        <td style="color:rgb(236, 233, 71)">{{$item->stock}}</td>
                        <td style="color:rgb(241, 13, 32)">{{$item->statut}}</td>
                        <td style="color:rgb(39, 90, 5)">{{$item->popularite}}</td>
                        <td><img src="{{asset('produit/'.$item->photo)}}" alt="" width="70px" height="50px"></td>
                        <td>
                            @foreach ($item->images as $doxa)
                                <img src="{{asset('produit/'.$doxa->photos)}}" alt="" width="70px" height="70px" data-imo="{{$doxa->id}}" class="delo_gal"> 
                            @endforeach
                        </td>
                        <td>
                            <button type="button" class="btn btn-warning" onclick="edit_pro({{$item->id}})"></i></button>
                            <button type="button" class="btn btn-danger" onclick="delete_pro({{$item->id}})"></button>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
            </table>
        </div>
       </div>
    </div>
    <script src="http://code.jquery.com/jquery-1.11.1.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
 integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
 integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

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
      $(function(){
        $(".delete_multiple").on("click",{},function(){
            var stock_data = [];
              $(".delete_multiple").each(function(){
                   if($(this).is(":checked")){
                       stock_data.push($(this).val());
                   }
              });
                console.log(stock_data);
                $(".golix").on("click",{},function(){
                       $.ajax({
                           type:"get",
                           url:"{{url('delete_multiple_categorie')}}",
                           data:"stock_data="+stock_data,

                       });
                      show_cat();
                });
        });
      });
   </script>

<script>
    $(function(){
       $(".delete_multiple_x").on("click",function(){
            var stock_dd = [];
             $(".delete_multiple_x").each(function(){
                  if($(this).is(":checked")){
                    stock_dd.push($(this).val());
                     
                  }
             });
              console.log(stock_dd);
               $(".golax").on("click",function(){
                  $.ajax({
                     type:"get",
                     url:"{{url('delete_multiple_produit')}}",
                     data:"stock_dd="+stock_dd,
                     success:function(response){
                        show_pro();
                     }
                  });
               });
       });
    });
</script>

<script>
    $(function(){
       
         $(".delo_gal").on("click",function(){
            var del = $(this).attr("data-imo");
            console.log(del);

            $.ajax({
                 type:"get",
                   url:"{{url('delete_gallery')}}/"+del,
                        success:function(response){
                           show_pro();
     }
});
          
    });
        
    
    });
</script>

</body>
</html>