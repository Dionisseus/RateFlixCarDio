@extends('layouts.app')
@section('content')
<!DOCTYPE>
<html>
<head>
   <meta charset="UTF-8">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

   <!-- CSRF Token -->
</head>

<body style="background:rgb(40,40,40) url('../images/banner.jpg') no-repeat center !important;   background-size:100% auto !important;
padding:0 !important;
margin:0 !important;
background-blend-mode:multiply !important;">


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
                <span class="score">85</span>

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
                {{ csrf_field() }}
                <textarea id="reviewText" name="reviewText" placeholder="Escribe tu reseña..."></textarea>
                @foreach ($data as $value)
                <input type="hidden" id="idUser" name="idUser" value="{{Auth::user()->id}}">
                <input type="hidden" id="idMovie" name="idMovie" value="{{$value->id}}">
                @endforeach
                <input type="radio" id="isPositive" name="thumbsUp" class="vote positive" value="1">
                <input type="radio" id="isNegative" name="thumbsUp" class="vote negative"  value="0">
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
    <div class="suggest" name="2001 A Space Odyssey" data_src="images/2001ASpaceOdysseyMovie.jpg"></div>
    <div class="suggest" name="the martian" data_src="images/theMartian.jpg"></div>
</section>
</article>

</body>
</html>
@endsection
