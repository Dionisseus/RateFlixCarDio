@extends('layouts.app')
@section('content')
<!DOCTYPE>
<html>
<head>
 <meta charset="UTF-8">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

 <!-- CSRF Token -->
</head>
<body style="background:rgb(40,40,40)  no-repeat center !important;   background-size:100% auto !important;
padding:0 !important;
margin:0 !important;
background-blend-mode:multiply !important;">




<article id="reviewsContainer">
   <h1>{{Auth::user()->name}} Reviews</h1>
   <section class="block">
   
    <article class="myreviews">
        <h2>My Reviews</h4>
<br>
        @foreach ($dataRate as $rate)
        <form method="POST" action="deleteReview" enctype="multipart/form-data">
   <input type='hidden' class='user_id' name="user_id" value="{{Auth::user()->id}}">
    {{ csrf_field() }}
   <input type="hidden" id="idRate" name="idRate" value="{{$rate->idRate}}">
        @if($rate->thumbsUp === 1)
        <div class="reviewUser">
            <div class="rate positive caja1">
                <span class="rateMessage"></span>
            </div>
            <div class="rateContent caja2">
              {{$rate->review}}
              
          </div>
          <div class="caja3">
          <input type="Submit" value="Delete">
          </div>
      </div>
      @endif
      @if($rate->thumbsUp === 0)
      <div class="reviewUser">
        <div class="rate negative caja1">
            <span class="rateMessage"></span>
        </div>
         <div class="rateContent caja2">
              {{$rate->review}}
              
          </div>
          <div class="caja3">
          <input type="Submit" value="Delete">
          </div>
    </div>
    @endif
</form>
    @endforeach
</article>

</section>
</article>
</body>
</html>
@endsection
