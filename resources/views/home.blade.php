@extends('base')


@section('content')



<div class="container">

    <div class="buttonBox">
        <a href="/">Home</a>
        <a href="/categories">Category</a>
        <a href="/merchandises">Merchandise</a>
        <a href="/units">Unit</a>



      </div>

      <style>
        .buttonBox{
            width: 500px;
            text-align: center;
            background-color: rgb(185, 107, 171);
            display: grid;
            place-items: center;
            margin-top: 100px;
            height: 400px;
            box-shadow: 10px 10px 30px 1px rgba(156, 140, 140, 0.541);
        }
        .buttonBox a{
            background-color: rgb(79, 37, 70);
            width: 150px;
            margin: 20px;
            padding: 20px;
            color: white;
            text-decoration: none;
            transition: 0.1s;
        }
        .buttonBox a:hover{
            background-color: rgb(63, 58, 75);
        }
        .buttonBox a:active{
            background-color: rgb(63, 57, 82);
            font-size: 15px;
            padding: 21px;
        }
        .container{
            display: grid;
            place-items: center;

        }
      </style>

</div>

@endsection
