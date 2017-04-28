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

                    <a class="navbar-brand text-uppercase" style="font-size:50px; color:#ff6800"  href="{{ url('/') }}" >
                        {{ config('app.name', 'RateFlix') }}
                    </a>

                   <div id="apps">
  <autocomplete-input :options="options" @select="onOptionSelect">
    <template slot="item" scope="option">
      <article class="media">
        <figure class="media-left">
          <p class="image is-64x64">
            <img :src="option.thumbnail">
          </p>
        </figure>
        <p>
          <strong>@{{ option.title }}</strong>
          <br>@{{ option.description }}
        </p>
      </article>
    </template>
  </autocomplete-input>
</div>

<script id="autocomplete-input-template" type="text/x-template">
  <div class="autocomplete-input">
    <p class="control has-icon has-icon-right">
      <input v-model="keyword" class="input is-large" placeholder="Search..." @input="onInput($event.target.value)" @keyup.esc="isOpen = false" @blur="isOpen = false" @keydown.down="moveDown" @keydown.up="moveUp" @keydown.enter="select">
      <i class="fa fa-angle-down"></i>
    </p>
    <ul v-show="isOpen" class="options-list">
      <li v-for="(option, index) in fOptions" :class="{
          'highlighted': index === highlightedPosition
        }" @mouseenter="highlightedPosition = index" @mousedown="select">
        <slot name="item" :title="option.title" :description="option.description" :thumbnail="option.thumbnail"/>
      </li>
    </ul>
  </div>
</script>



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



<!-- Scripts -->

<script src="https://unpkg.com/vue@2.3.0/dist/vue.js"></script>
<script> 
 window.onload = function() {
Vue.component('autocomplete-input', {
    template: '#autocomplete-input-template',
    props: {
      options: {
        type: Array,
        required: true
      }
    },
    data() {
      return {
        isOpen: false,
        highlightedPosition: 0,
        keyword: ''
      }
    },
    computed: {
      fOptions() {
        const re = new RegExp(this.keyword, 'i')
        return this.options.filter(o => o.title.match(re))
      }
    },
    methods: {
      onInput(value) {
          this.highlightedPosition = 0
          this.isOpen = !!value
        },
        moveDown() {
          if (!this.isOpen) {
            return
          }
          this.highlightedPosition =
            (this.highlightedPosition + 1) % this.fOptions.length
        },
        moveUp() {
          if (!this.isOpen) {
            return
          }
          this.highlightedPosition = this.highlightedPosition - 1 < 0 ? this.fOptions.length - 1 : this.highlightedPosition - 1
        },
        select() {
          const selectedOption = this.fOptions[this.highlightedPosition]
          this.$emit('select', selectedOption)
          this.isOpen = false
          this.keyword = selectedOption.title
        }
    }
  })

  new Vue({
    el: '#apps',
    data: {
      options: [{
        title: 'First Scene',
        description: 'lorem ipsum dolor amet.',
        thumbnail: 'http://lorempicsum.com/nemo/200/200/1'
      }, {
        title: 'Second Scene',
        description: 'lorem ipsum dolor amet.',
        thumbnail: 'http://lorempicsum.com/nemo/200/200/2'
      }, {
        title: 'Third Scene',
        description: 'lorem ipsum dolor amet.',
        thumbnail: 'http://lorempicsum.com/nemo/200/200/3'
      }, {
        title: 'Fourth Scene',
        description: 'lorem ipsum dolor amet.',
        thumbnail: 'http://lorempicsum.com/nemo/200/200/4'
      }]
    },
    methods: {
      onOptionSelect(option) {
        console.log('Selected option:', option)
      }
    }
  })

    $(".tile").on("click",function() {
            $(".tileId").val(this.id);
            $(".genreId").val(this.title);
            $("form").submit();
        });
};
</script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/netflixcaroussel.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
