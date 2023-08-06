@extends('base')
@section('css')
    <style>
         table{
               box-shadow: 0 25px 25px rgba(12, 1, 20, 0.885);
        }

        .imgd{
            border-radius : 75px;
            height:60px;
            width:60px;
        }

        th{
            text-align: center;
        }

        .tagx{
            box-shadow: 0 25px 25px rgba(4, 60, 70, 0.885);
        }

       
    </style>
@endsection
@section('content')
<br><br><br>
<div class="container">
    <div class="content">
        <div class="row">
            <div id="card_vrai" style="margin-top: -25px">

            </div>
        </div>
    </div>
</div>
 <br><br><br>
 @section('scripts')
   

     
  @endsection

@endsection