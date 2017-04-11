@extends('layouts.app')

@section('content')

<div class="contain" style="overflow: hidden">

<h1 style="margin: auto; margin-top: 10px;"></h1>
  <div class="row">

    <div class="row__inner">

      <h4>
        RESEÑAS QUE TE PODRÍAN INTERESAR
      </h4>
    @foreach ($data as $value)

      <div class="tile">
        <div class="tile__media">

          <img class="tile__img" src= "{{ $value->image }}" alt="" width="150px" height="150px" />
        </div>
        <a href="{{ url('/review?id=') }}{{$value->id }}">
        <div class="tile__details">
          <div class="tile__title">
        {{ $value->name }}
          </div>
        </div>
      </a>
       </div>
       @endforeach

    <a class="left carousel-control"  role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>

    </a>

    <a class="right carousel-control" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>

    </a>
  </div>
</div>
</div>

@endsection
