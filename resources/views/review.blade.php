@extends('layouts.app')
@section('content')
<!DOCTYPE>
<html>
<head>
   <meta charset="UTF-8">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

   <!-- CSRF Token -->
</head>
@foreach ($data as $value)
<body style="background:rgb(40,40,40) url('../{{$value->image}}') no-repeat center !important;   background-size:100% auto !important;
    padding:0 !important;
    margin:0 !important;
    background-blend-mode:multiply !important;">
    @endforeach
      @if (Auth::guest())

    <article id="movieReview">
     @foreach ($data as $value)
     <h1>{{ $value->name }}</h1>
     @endforeach
     <section class="block">
              <!--  <h4>Director</h4>
                @foreach ($data as $value)
                <span class="name">{{ $value->actor }}</span>
                @endforeach-->
                <h4>Elenco</h4>
                @foreach ($data as $value)
                <span class="name">{{ $value->actor }}</span>
                @endforeach
              <!--  <span class="name">Anne Hathaway</span>
                <span class="name">Jessica Chastain</span>
                <span class="name">Bill Irwin</span>
                <span class="name">Ellen Burstyn</span>
                <span class="name">Michael Caine</span> -->
                <h4>Generos</h4>
                @foreach ($data as $value)
                <span class="name">{{$value->genre}}</span>
                @endforeach
                <h4>Calificacion</h4>
                <span class="score">{{$likes}}</span>
            </section>
            <section class="block">
                <article class="reviewsContainer">
                    <h4>Reseñas de los miembros</h4>
                    @foreach ($dataRate as $rate)
                    @if($rate->thumbsUp === 1)
                    <div class="reviewUser">
                        <div class="rate positive">
                            <span class="rateMessage"></span>
                        </div>
                        <p class="rateContent">
                          {{$rate->review}}
                      </p>
                  </div>
                  @endif
                  @if($rate->thumbsUp === 0)
                  <div class="reviewUser">
                    <div class="rate negative">
                        <span class="rateMessage"></span>
                    </div>
                    <p class="rateContent">
                        {{$rate->review}}
                    </p>
                </div>
                @endif
                @endforeach
            </article>
            <form id="reviewForm" role="form" method="POST" action="reviewsRate">
                <textarea id="reviewText" name="reviewText" class="form-control" placeholder="Escribe tu reseña..." required></textarea>
                @foreach ($data as $value)
                <input type="hidden" id="idUser" name="idUser" value="{{Auth::user()->id}}">
                <input type="hidden" id="idMovie" name="idMovie" value="{{$value->id}}">
                @endforeach
                <input type="radio" id="isPositive" name="thumbsUp" class="vote positive" value="1" required>
                <input type="radio" id="isNegative" name="thumbsUp" class="vote negative"  value="0" required>
                {{ csrf_field() }}
                <input type="submit" value="Enviar">
            </form>
        </section>
        <section class="block">
            <h4>Sinopsis</h4>
            @foreach ($data as $value)
            <span class="argument">
                {{ $value->sinopsis }}
            </span>
            @endforeach
            <h4>Sugerencias</h4>
            @foreach ($dataRelated as $value)
            <div class="suggest" id="{{ $value->id }}" title="{{$value->genre}}" >
                <img class="imagenDiv" src="{{$value->image}}" alt="{{$value->name}}"/>
            </div>
            @endforeach

            <script>
                window.onload = function() {
                    $(".suggest").on("click",function() {
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

        </section>
    </article>
    @endif
</body>
</html>

@endsection
