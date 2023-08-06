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
        .card{
               box-shadow: 0 25px 25px rgba(26, 23, 212, 0.885);
        }
    </style>
</head>
<body style="background-color: rgb(2, 22, 22)">
    
    <div class="container">
        <div class="content">
           
            <div class="row">
                <div class="card" style="background-color: black;margin-top:35px; box-shadow:">
                    
                   <div class="card-header" style="font-family: aharoni;font-size:1.5rem">EDIT-PRODUCT</div>
                   <div class="notif3"></div>
                    <div class="card-body" style="color:aqua;font-family:aharoni">
                        <form method="POST" id="catox">
                            <div class="group-control">
                                <label for="Category">Product</label>
                                <input type="text" class="form-control" name="nom_pro" value="{{$edit_pro->nom_pro}}">
                            </div>
                            <div class="group-control">
                                <label for="Category">Reference</label>
                                <input type="text" class="form-control" name="ref_pro"  value="{{$edit_pro->ref_pro}}">
                            </div>

                            <div class="group-control">
                                <label for="Category">Description</label>
                                <textarea name="description_pro" class="form-control">{{$edit_pro->description_pro}}</textarea>
                            </div>

                            <div class="group-control">
                                <label for="Category">Price</label>
                                <input type="number" class="form-control" name="prix_pro" value="{{$edit_pro->prix_pro}}">
                            </div>

                            <div class="group-control">
                                <label for="Category">Descount</label>
                                <input type="number" class="form-control" name="desconte_pro"  value="{{$edit_pro->desconte_pro}}">
                            </div>

                            <div class="group-control">
                                <label for="Category">Stock</label>
                                <input type="number" class="form-control" name="stock"  value="{{$edit_pro->stock}}">
                            </div>

                            <div class="group-control">
                                
                                <input type="checkbox"  name="statut"  {{$edit_pro->statut=="1" ? "checked":""}}>Status
                                <input type="checkbox"  name="popularite"  {{$edit_pro->popularite=="1" ? "checked":""}}>Popularity
    
                            </div>
                            <div class="group-control">
                                <label for="Category">Image</label>
                                <input type="file" class="form-control" name="photo">
                            </div>

                            @if ($edit_pro->photo)
                            <div class="group-control">
                              <img src="{{asset('produit/'.$edit_pro->photo)}}" alt="" width="70px" height="70px"  style=" border-radius : 75px">
                            </div>
                            @endif

                            <div class="group-control">
                                <label for="Category">Gallery</label>
                                <input type="file" class="form-control" name="photos[]" multiple>
                            </div>


                           <div class="group-control">
                            <label for="" class="mt-3">CATEGORY</label>
                            <select name="categorie" id="categorie">
                                @foreach ($edit_cato as $item)
                                  <option value="{{$item->id}}">{{$item->nom}}</option> 
                                @endforeach
                            </select>
                           </div>


                            <div class="group-control">
                                <button type="button" class="btn btn-primary mt-3" onclick="update_pro({{$edit_pro->id}})">Enter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-1.11.1.js"></script> 

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
 integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
 integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

 

<script>
    function edit_pro(id){
        $.get("{{url('edit_produit')}}/"+id,{},function(data){
                $("#vox").html(data);
                $("#general1").modal('show');
        }) ;
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
</body>
</html>