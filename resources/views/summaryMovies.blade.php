@extends('layouts.app')
@section('content')
<!DOCTYPE HTML>
<html>
    <head>
        <title>Carrusel</title>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="{!! asset('css/style-sum.css') !!}" rel="stylesheet" type="text/css">
      <script src="{{ asset('js/script-sum.js') }}"></script>
    </head>
    <body>
      <script>
        window.onload = function() {
            $(".tile").on("click",function() {
                $(".tileId").val(this.id);
                $(".genreId").val(this.title);
                $("form").submit();
            });
        };
      </script>

      <form method="POST" action="reviews" enctype="multipart/form-data">
        <input type='hidden' class='tileId' name="title_id" value="">
         <input type='hidden' type="text" class='genreId' name="genre_val" value="">
          {{ csrf_field() }}
      </form>

        <h2 class="carTitle">Reseñas que te podrian gustar</h2>
        <div class="car_">
            <div class="controls right"></div>
            <div class="controls left"></div>
            <section class="sub_car">
                @foreach ($data as $value)
                        <a id="{{ $value->id }}" title="{{$value->genre}}" class="movie tile" src= "{{ $value->image }}" alt="" width="300px" height="170px" /> </a>
                   @endforeach

            </section>
        </div>
        <h2 class="carTitle">Reseñas de Ciencia-Ficción</h2>
        <div class="car_">
            <div class="controls right"></div>
            <div class="controls left"></div>
            <section class="sub_car">

                @foreach ($generofic as $value)
                <a id="{{ $value->id }}" title="{{$value->genre}}" class="movie tile" src= "{{ $value->image }}" alt="" width="300px" height="170px" /> </a>
                @endforeach
            </section>
        </div>
        <h2 class="carTitle">Reseñas de Ciencia-Ficción</h2>
        <div class="car_">
            <div class="controls right"></div>
            <div class="controls left"></div>
            <section class="sub_car">

                @foreach ($generos as $value)
                <a id="{{ $value->id }}" title="{{$value->genre}}" class="movie tile" src= "{{ $value->image }}" alt="" width="300px" height="170px" /> </a>
                @endforeach
            </section>
        </div>
    </body>
</html>
@endsection
