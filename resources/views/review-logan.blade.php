@extends('layouts.app')
@section('content')
<!DOCTYPE>
<html>
    <head>
        <title>Reseña | Logan</title>
        <meta charset="UTF-8">
    </head>
    <body style="background:rgb(40,40,40) url('../images/logan.jpg') no-repeat center !important;   background-size:100% auto !important;
      padding:0 !important;
      margin:0 !important;
      background-blend-mode:multiply !important;">
        <article id="movieReview">
            <h1>Logan</h1>
            <section class="block">
                <h4>Director</h4>
                <span class="name">James Mangold</span>
                <h4>Elenco</h4>
                <span class="name">Hugh Jackman</span>
                <span class="name">Patrick Stewart</span>
                <span class="name">Boyd Holbrook</span>
                <span class="name">Stephen Merchant</span>
                <span class="name">Dafne Keen</span>
                <span class="name">Dafne Keen</span>
                <h4>Generos</h4>
                <span class="name">Acción</span>
                <h4>Calificacion</h4>
                <span class="score">90</span>
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
                <span class="argument">La trama nos traslada al año 2029 seis años después de vivir en un mundo sin Centinelas.
                   Los mutantes están casi al borde de la extinción, esto sin mencionar que durante los últimos 25 años no ha nacido ningún mutante. Los X-Men han muerto y el que una vez fue Wolverine ahora conocido como solo James "Logan" Howlett (Hugh Jackman),
                   se encuentra en un estado de lento envenenamiento causado por el adamantium insertado en su cuerpo tantos años atrás, y como consecuencia de esto su factor curativo esté seriamente dañado por lo cual ahora luce mucho más viejo y sus heridas no sanen del todo, dejando estragos en el cuerpo de Logan.</span>
                <h4>Sugerencias</h4>
                <div class="suggest" name="Deadpool" data_src="images/deadpool.jpg"></div>
                <div class="suggest" name="Wolverine" data_src="images/origins.jpg"></div>
            </section>
        </article>
    </body>
</html>
@endsection
