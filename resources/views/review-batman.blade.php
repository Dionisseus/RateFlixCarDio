@extends('layouts.app')
@section('content')
<!DOCTYPE>
<html>
    <head>
        <title>Reseña | Batman: The Dark Knight</title>
        <meta charset="UTF-8">
    </head>
    <body style="background:rgb(40,40,40) url('../images/batman.jpg') no-repeat center !important;   background-size:100% auto !important;
      padding:0 !important;
      margin:0 !important;
      background-blend-mode:multiply !important;">
        <article id="movieReview">
            <h1>BATMAN: THE DARK KNIGHT</h1>
            <section class="block">
                <h4>Director</h4>
                <span class="name">Christopher Nolan</span>
                <h4>Elenco</h4>
                <span class="name">Christian Bale</span>
                <span class="name">Heath Ledger</span>
                <span class="name">Morgan Freeman</span>
                <span class="name">Michael Caine</span>
                <h4>Generos</h4>
                <span class="name">Ciencia ficción</span>
                <h4>Calificacion</h4>
                <span class="score">92</span>
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
                <span class="argument">Nueve meses después de los eventos de la primera película,
                   una banda de ladrones disfrazados como payasos llevan a cabo un violento robo en uno
                    de los bancos de la mafia de Gotham City, pero los asaltantes desconocen que entre
                     ellos se encuentra el Joker (Heath Ledger), quien les había ordenado traicionarse
                      y asesinarse unos a otros, con la finalidad de repartir entre menos el botín.
                      Finalmente el Joker asesina al último de sus cómplices y escapa en un autobús escolar.</span>
                <h4>Sugerencias</h4>
                <div class="suggest" name="2001 A Space Odyssey" data_src="images/2001ASpaceOdysseyMovie.jpg"></div>
                <div class="suggest" name="the martian" data_src="images/theMartian.jpg"></div>
            </section>
        </article>
    </body>
</html>
@endsection
