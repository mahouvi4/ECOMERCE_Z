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
                        <th><button type="button" class="btn btn-danger golix"></button></th>
                        <th>Category</th>
                        <th>Reference</th>
                        <th>Descount</th>
                        <th>Status</th>
                        <th>Popularity</th>
                        <th>Images</th>
                        <th>Action</th>
                    </tr>
                </thead>

                 <tfoot style="font-size: 1.5rem">
                    <tr>
                        <th><button type="button" class="btn btn-danger golix"></button></th>

                        <th>Category</th>
                        <th>Reference</th>
                        <th>Descount</th>
                        <th>Status</th>
                        <th>Popularity</th>
                        <th>Images</th>
                    </tr>
                 </tfoot>

                  <tbody style="font-size: 0.8rem">
                    @foreach ($show_cat as $item)
                    <tr>
                        <td><input type="checkbox" value="{{$item->id}}" class="delete_multiple"></td>
                        <td style="color:bisque">{{$item->nom}}</td>
                        <td style="color:rgb(236, 71, 173)">{{$item->ref}}</td>
                        <td style="color:rgb(37, 203, 224)">{{$item->desconte}}%</td>
                        <td style="color:rgb(241, 13, 32)">{{$item->statut}}</td>
                        <td style="color:rgb(39, 90, 5)">{{$item->popularite}}</td>
                        <td><img src="{{asset('categorie/'.$item->photo)}}" alt="" width="70px" height="50px"></td>
                        <td>
                            <button type="button" class="btn btn-warning" onclick="edit_cat({{$item->id}})"><i class="fas fa-edit"></i></button>
                            <button type="button" class="btn btn-danger" onclick="delete_cat({{$item->id}})"></button>
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
</body>
</html>