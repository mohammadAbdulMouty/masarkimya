@extends('layout.mainlayouts')
@section('content')
 
  <div class="home-image">
    
  </div>
  <div class="row section-one">
    @php
       $right = 'slideInRight';
       $left = 'slideInLeft';
        if(Session()->get('lang') == 'ar')
        {
          $left = 'slideInRight';
          $right = 'slideInLeft';
        }
 
    @endphp
    

    <div class="col-md-6 wow {{ $left }}">
      <img class="img-section-one"src="img/slider1.jpg">
    </div>
    <div class="col-md-6 wow {{ $right }}">
      <h2>Masar Kimya</h2>
      <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quis nam earum molestias odit harum quas quo nemo aliquam assumenda modi, eius architecto nihil veniam ratione! Dolorum deserunt adipisci reiciendis!</p>
    </div>
  </div>
  <div class="row section-two">
   
    <div class="col-md-6 wow {{ $left }}">
        <img class="img-section-two"src="img/slider2.jpg">
     
    </div>
    <div class="col-md-6 wow {{ $right }}">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quis nam earum molestias odit harum quas quo nemo aliquam assumenda modi, eius architecto nihil veniam ratione! Dolorum deserunt adipisci reiciendis!</p>
    </div>
  </div>
@endsection
