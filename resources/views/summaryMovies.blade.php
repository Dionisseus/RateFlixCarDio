@extends('layouts.app')

@section('content')
<div class="contain" style="overflow: hidden">

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

<h1 style="margin: auto; margin-top: 10px;"></h1>
  <div class="row">
    <h4>
      Popular Reviews
    </h4>
    <div class="row__inner">


    @foreach ($data as $value)

      <div id="{{ $value->id }}" title="{{$value->genre}}" class="tile">
        <div class="tile__media">

          <img class="tile__img" src= "{{ $value->image }}" alt="" width="150px" height="150px" />
        </div>
        <!-- <a href="{{ url('/review?id=') }}{{$value->id }}"> -->

        <div class="tile__details">
          <div class="tile__title">
        {{ $value->name }}
          </div>
        </div>

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
