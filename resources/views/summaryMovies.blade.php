@extends('layouts.app')

@section('content')

<div class="contain" style="overflow: hidden">

<h1 style="margin: auto; margin-top: 10px;"></h1>
  <div class="row">

    <div class="row__inner">

      <h4>
        RESEÑAS QUE TE PODRÍAN INTERESAR
      </h4>
      <div class="tile">
        <div class="tile__media">
          <img class="tile__img" src="../images/banner.jpg" alt=""  />
        </div>
        <a href="{{ url('/review') }}">
        <div class="tile__details">
          <div class="tile__title">
          Interestellar
          </div>
        </div>
      </a>
       </div>


      <div class="tile">
        <div class="tile__media">

          <img class="tile__img" src="../images/logan.jpg" alt=""  />
        </div>
        <a href="{{ url('/review-logan') }}">
        <div class="tile__details">
          <div class="tile__title">
            LOGAN
          </div>
        </div>
      </a>
    </div>


      <div class="tile">
        <div class="tile__media">
          <img class="tile__img" src="../images/lalaland.jpg" alt=""  />
        </div>
        <div class="tile__details">
          <div class="tile__title">
            LALALAND


          </div>
        </div>
      </div>

      <div class="tile">
        <div class="tile__media">

          <img class="tile__img" src="../images/bandb.jpeg" alt=""  />
        </div>
        <div class="tile__details">
          <div class="tile__title">
            BEAUTY AND THE BEAST


          </div>
        </div>
      </div>

      <div class="tile">
        <div class="tile__media">

          <img class="tile__img" src="../images/theMartian.jpg" alt=""  />
        </div>
        <div class="tile__details">
          <div class="tile__title">
            THE MARTIAN



          </div>
        </div>
      </div>

      <div class="tile">
        <div class="tile__media">

          <img class="tile__img" src="../images/2001ASpaceOdysseyMovie.jpg" alt=""  />
        </div>
        <div class="tile__details">
          <div class="tile__title">
            2001: A Space Odyssey


          </div>
        </div>
      </div>

      <div class="tile">
        <div class="tile__media">

          <img class="tile__img" src="../images/deadpool.jpg" alt=""  />
        </div>
        <div class="tile__details">
          <div class="tile__title">
            DEADPOOL

          </div>
        </div>
      </div>

      <div class="tile">
        <div class="tile__media">

          <img class="tile__img" src="../images/hacksaw.jpg" alt=""  />
        </div>
        <div class="tile__details">
          <div class="tile__title">
            HACKSAW RIDGE


          </div>
        </div>
      </div>
    </div>

    <div class="row__inner">

      <h4>
      PELICULAS MÁS RESEÑADAS
      </h4>
      <div class="tile">
        <div class="tile__media">
          <img class="tile__img" src="../images/moonlight.jpg" alt=""  />
        </div>
        <a href="{{ url('/review') }}">
        <div class="tile__details">
          <div class="tile__title">
          MOONLIGHT
          </div>
        </div>
      </a>
      </div>

      <div class="tile">
        <div class="tile__media">

          <img class="tile__img" src="../images/banner.jpg" alt=""  />
        </div>
        <a href="{{ url('/review') }}">
        <div class="tile__details">
          <div class="tile__title">
            INERESTELLAR
          </div>
        </div>
      </a>
    </div>


      <div class="tile">
        <div class="tile__media">

          <img class="tile__img" src="../images/batman.jpg" alt=""  />
        </div>
        <a href="{{url('/review-bat')}}">
        <div class="tile__details">
          <div class="tile__title">
            BATMAN: THE DARK KNIGHT
          </div>
        </div>
      </a>


      </div>

      <div class="tile">
        <div class="tile__media">

          <img class="tile__img" src="../images/civil.jpg" alt=""  />
        </div>
        <div class="tile__details">
          <div class="tile__title">
            CAPTAIN AMERICA: CIVIL WAR


          </div>
        </div>
      </div>

      <div class="tile">
        <div class="tile__media">

          <img class="tile__img" src="../images/origins.jpg" alt=""  />
        </div>
        <div class="tile__details">
          <div class="tile__title">
            WOLVERINE: ORIGINS


        </div>
      </div>
    </div>
      <div class="tile">
        <div class="tile__media">

          <img class="tile__img" src="../images/logan.jpg" alt=""  />
        </div>
        <div class="tile__details">
          <div class="tile__title">
          LOGAN


        </div>
      </div>
    </div>
      <div class="tile">
        <div class="tile__media">

          <img class="tile__img" src="../images/bandb.jpeg" alt=""  />
        </div>
        <div class="tile__details">
          <div class="tile__title">
            BEAUTY AND THE BEAST


        </div>
      </div>
    </div>

      <div class="tile">
        <div class="tile__media">

          <img class="tile__img" src="../images/lalaland.jpg" alt=""  />
        </div>
        <div class="tile__details">
          <div class="tile__title">
            LALALAND


      </div>
    </div>
  </div>
  </div>
    <a class="left carousel-control"  role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>

    </a>

    <a class="right carousel-control" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>

    </a>
  </div>
</div>
</div>
</div>
@endsection
