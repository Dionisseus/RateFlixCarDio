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
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="actor" class="col-md-4 control-label">Actores</label>

                            <div class="col-md-6">
                              <!--   <input id="actor" type="text" class="form-control" name="actor" required> -->
                                <textarea id="actor" type="text" class="form-control" name="actor" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="sinpsis" class="col-md-4 control-label">Sinopsis</label>

                            <div class="col-md-6">
                              <!--   <input id="birth-date" type="date" class="form-control" name="birth-date" required> -->
                                <textarea id="sinopsis" type="text" class="form-control" name="sinopsis" required></textarea>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="duration" class="col-md-4 control-label">Duración de Película</label>

                            <div class="col-md-6">
                                <input id="duration" type="text" class="form-control" name="duration" required>


                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-default">
                                  Ingresar Película
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
