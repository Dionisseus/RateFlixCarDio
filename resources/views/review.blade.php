@extends('layouts.app')
@section('content')
<!DOCTYPE>
<html>
    <head>
        <title>Reseña | Interestelar</title>
        <meta charset="UTF-8">

            <!-- CSRF Token -->
    </head>

    <body style="background:rgb(40,40,40) url(<?= $data[0]->image ?>) no-repeat center !important;   background-size:100% auto !important;
      padding:0 !important;
      margin:0 !important;
      background-blend-mode:multiply !important;">


        <article id="movieReview">
          @foreach ($data as $value)
            <h1>{{$value->name}}</h1>
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
                @foreach ($data as $value)
                <span class="score">85</span>
                @endforeach
            </section>
            <section class="block">
                <h4>Reseñas de los miembros</h4>
                <article class="reviewsContainer">
                    <div class="reviewUser">
                        <div class="rate positive">
                            <span class="rateMessage"></span>
                        </div>
                        <p class="rateContent">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Pellentesque vestibulum porta turpis at tincidunt. Orci varius
                            natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus. Nullam commodo lorem at est blandit imperdiet.
                        </p>
                    </div>
                    <div class="reviewUser">
                        <div class="rate negative">
                            <span class="rateMessage"></span>
                        </div>
                        <p class="rateContent">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Pellentesque vestibulum porta turpis at tincidunt. Orci varius
                            natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus. Nullam commodo lorem at est blandit imperdiet.
                        </p>
                    </div>
                    <div class="reviewUser">
                        <div class="rate positive">
                            <span class="rateMessage"></span>
                        </div>
                        <p class="rateContent">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Pellentesque vestibulum porta turpis at tincidunt. Orci varius
                            natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus. Nullam commodo lorem at est blandit imperdiet.
                        </p>
                    </div>
                    <div class="reviewUser">
                        <div class="rate negative">
                            <span class="rateMessage"></span>
                        </div>
                        <p class="rateContent">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Pellentesque vestibulum porta turpis at tincidunt. Orci varius
                            natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus. Nullam commodo lorem at est blandit imperdiet.
                        </p>
                    </div>
                </article>
                <form id="reviewForm">
                    <textarea placeholder="Escribe tu reseña..."></textarea>
                    <input type="hidden">
                    <div value="1" class="vote positive"></div>
                    <div value="0" class="vote negative"></div>
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
