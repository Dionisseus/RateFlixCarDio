<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'RateFlix') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{!! asset('css/cascada.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('css/carousel.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('css/note.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('css/style.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('css/autocomplete.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('css/carouselNetflixLike.css') !!}" rel="stylesheet" type="text/css">

<style>
        .main{
            margin-left: 35px;
            display: inline-block;
            float: left;
            width: 25%;
            margin-right: 235px;
        }
        .preview{
            display: inline-block;
            float: left;
            max-width: 45%;
        }
        pre{
            background: #f8f8f8;
            padding: 15px;
        }
    </style>

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
            ]) !!};
       
        </script>
    </head>
    <body>
        <div id="app">
            <nav  class="navbar navbar-default navbar-collapse">
                <div class="container">
                    <div class="navbar-header">
                      <a href="{{ url('/') }}">
                        <img src="images/rate_03.png" height="65px" alt="Responsive image" >
                    </a>



                    <!-- Branding Image -->
                    <!--
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a> -->
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <a class="navbar-brand text-uppercase"style="font-size:50px; color:#ff6800"  href="{{ url('/') }}" >
                        {{ config('app.name', 'RateFlix') }}
                    </a>

                    <div class="main">
<autocomplete
            id="input__id-optional"
            class="input_class optional"
            name="people"
            placeholder="Type Here"
            param="q"
            limit="5"
            anchor="value"
            label="label"
            model="vModelLike">
        </autocomplete>
    </div>
        <h1>Data Selected</h1>
        <pre>@{{ data | json 2 }}</pre>



                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li>
                          <a class="tabtab text-uppercase" href="{{ route('login') }}">
                            <strong>
                              Iniciar Sesion
                          </strong>
                      </a>
                  </li>
                  <li>
                      <a class="tabtab text-uppercase" href="{{ route('register') }}">
                          <strong>
                            Registrarse
                        </strong>
                    </a></li>
                    @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{ url('/insertMovie') }}">
                                Add Movie
                            </a>
                            <a href="{{ url('/profile') }}">
                                        Profile
                                      </a>

                            <form id="profile">
                                {{ csrf_field() }}
                            </form>

                             <a href=""
                            onclick="event.preventDefault();
                            document.getElementById('myreviews-form').submit();">
                            My Reviews
                        </a>

                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="myreviews-form" action="myreviews" method="POST" style="display: none;">
                        <input type='hidden' class='user_id' name="user_id" value="{{Auth::user()->id}}">
                            {{ csrf_field() }}
                        </form>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
            @endif
        </ul>
    </div>
</div>
</nav>

@yield('content')
</div>

<script src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.14/vue.min.js"></script>
    <!-- <script src="./vue-autocomplete.js"></script> -->
 <script src="{{ asset('js/vue-autocomplete.min.js') }}"></script>
<script src="{{ asset('js/vue-autocomplete.js') }}"></script>
    <script>
        new Vue({
            el: 'body',
            data: function() {
                return {
                    vModelLike: "",
                    data: {}
                };
            },
            events: {
                /**
                *   Global Autocomplete Callback Event
                *
                *   @event-name autocomplete:{event-name}
                *   @param {String} name name of auto
                *   @param {Object} data
                *   @param {Object} json - ajax-loaded only
                */
                // Autocomplete on before ajax progress
                'autocomplete:before-ajax': function (name,data){
                    console.log('before-ajax',name,data);
                },
                // Autocomplete on ajax progress
                'autocomplete:ajax-progress': function(name,data){
                    console.log('ajax-progress',data);
                },
                // Autocomplete on ajax loaded
                'autocomplete:ajax-loaded': function(name,data,json){
                    console.log('ajax-loaded',data,json);
                },
                // Autocomplete on focus
                'autocomplete:focus': function(name,evt){
                    console.log('focus',name,evt);
                },
                // Autocomplete on input
                'autocomplete:input': function(name,data){
                    console.log('input',data);
                },
                // Autocomplete on blur
                'autocomplete:blur': function(name,evt){
                    console.log('blur',evt);
                },
                // Autocomplete on show
                'autocomplete:show': function(name){
                    console.log('show',name);
                },
                // Autocomplete on selected
                'autocomplete:selected': function(name,data){
                    console.log('selected',data);
                    this.data = data;
                },
                // Autocomplete on hide
                'autocomplete:hide': function(name){
                    console.log('hide',name);
                },
                /**
                *   Spesific Autocomplete Callback Event By Name
                *
                *   @event-name autocomplete-{component-name}:{event-name}
                *   @param {String} name name of auto
                *   @param {Object} data
                *   @param {Object} json - ajax-loaded only
                */
                // Autocomplete on before ajax progress
                'autocomplete-people:before-ajax': function(data){
                    console.log('before-ajax-people',data);
                },
                // Autocomplete on ajax progress
                'autocomplete-people:ajax-progress': function(data){
                    console.log('ajax-progress-people',data);
                },
                // Autocomplete on ajax loaded
                'autocomplete-people:ajax-loaded': function(data,json){
                    console.log('ajax-loaded-people',data,json);
                },
                // Autocomplete-people on focus
                'autocomplete-people:focus': function(evt){
                    console.log('focus-people',evt);
                },
                // Autocomplete-people on input
                'autocomplete-people:input': function(data){
                    console.log('input-people',data);
                },
                // Autocomplete-people on blur
                'autocomplete-people:blur': function(evt){
                    console.log('blur-people',evt);
                },
                // Autocomplete-people on show
                'autocomplete-people:show': function(){
                    console.log('show-people');
                },
                // Autocomplete-people on selected
                'autocomplete-people:selected': function(data){
                    console.log('selected-people',data);
                },
                // Autocomplete-people on hide
                'autocomplete-people:hide': function(){
                    console.log('hide-people');
                },
            }
        });
    </script>

<!-- Scripts -->

<script src="{{ asset('js/app.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('js/netflixcaroussel.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
