@extends('layouts.app')
@section('content')

<!DOCTYPE HTML>
<html>
    <head>
        <title>Perfil | Carlos</title>
        <meta charset="UTF-8">

        <link href="{!! asset('css/styles.css') !!}" rel="stylesheet" type="text/css">

    </head>
    <body update="false">

      <script>
        window.onload = function() {
            $(".tile").on("click",function() {
                $(".tileId").val(this.id);
                $("form").submit();
            });
        };

      </script>
        <form action="edit_data" method="POST" class="margin" enctype="multipart/form-data">
              <input type='hidden' class='tileId' name="title_id" value="">
            {{ csrf_field() }}

            <span id="mainInfoContainer">
             <div id="profileImg" style="background-image:url({{Auth::user()->avatar}})"></div>
                <h1 id="profileName">{{Auth::user()->name}}</h1>
                <input name="name"type="text" value="{{Auth::user()->name}}">
                <div id="update"></div>
            </span>
            <h2>Email</h2>
            <span class="data">{{Auth::user()->email}}</span>
            <input type="text" name="email" value="{{Auth::user()->email}}">
            <h2>Fecha de nacimiento</h2>
            <span class="data">06 de Octubre de 1994</span>
            <input type="date" name="birth" value="">
            <h2>Genero</h2>
            <span class="data">{{Auth::user()->genre}}</span>
            <input type="text"name="genre" value="{{Auth::user()->genre}}">
            <h2 class="img">Imagen de perfil</h2>
            <label for="profilePic">Selecciona una imagen</label>
            <input id="profilePic" name="avatar" class="hidden" type="file">
            <input type="submit" value="Guardar perfil">

        </form>
    </body>
</html>
@endsection
