@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="margin-top: 10%;">
                <div class="panel-heading top-form" >
                  <strong>

                INGRESE NUEVA PELICULA:
                  </strong></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="store" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nombre de Película</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name"  required autofocus>

                INGRESE LA SIGUIENTE INFORMACION:
                  </strong></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>


                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="image" class="col-md-4 control-label">Imagen</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control" name="image"  required>

                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo Electrónico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>

                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="genre" class="col-md-4 control-label">Género</label>

                            <div class="col-md-6">
                                <input id="genre" type="text" class="form-control" name="genre" required>

                                @if ($errors->has('genre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('genre') }}</strong>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>

                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">

                            <label for="actor" class="col-md-4 control-label">Actores</label>

                            <div class="col-md-6">
                              <!--   <input id="actor" type="text" class="form-control" name="actor" required> -->
                                <textarea id="actor" type="text" class="form-control" name="actor" required></textarea>

                            <label for="password-confirm" class="col-md-4 control-label">Confirmar contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                            </div>
                        </div>

                        <div class="form-group">

                            <label for="sinpsis" class="col-md-4 control-label">Sinopsis</label>

                            <div class="col-md-6">
                              <!--   <input id="birth-date" type="date" class="form-control" name="birth-date" required> -->
                                <textarea id="sinopsis" type="text" class="form-control" name="sinopsis" required></textarea>

                            <label for="birth-date" class="col-md-4 control-label">Fecha de nacimiento</label>

                            <div class="col-md-6">
                                <input id="birth-date" type="date" class="form-control" name="birth-date" required>



                            </div>
                        </div>

                        <div class="form-group">

                            <label for="duration" class="col-md-4 control-label">Duración de Película</label>

                            <div class="col-md-6">
                                <input id="duration" type="number" class="form-control" name="duration" required>

                            <label for="genre" class="col-md-4 control-label">Género</label>

                            <div class="col-md-6">
                                <input id="genre" type="text" class="form-control" name="genre" required>



                            </div>
                        </div>




                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-default">
                                  Ingresar Película

                        <div class="form-group">
                            <label for="avatar" class="col-md-4 control-label">Avatar</label>

                            <div class="col-md-6">
                                <input id="avatar" type="file" class="form-control" name="avatar" required>


                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-default">
                                    Crear cuenta
                            </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
