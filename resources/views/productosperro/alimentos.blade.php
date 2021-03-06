@extends('layout.master')
    @section('content')

    
<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="{{ url('/imagenes/alimentosperro.webp') }}" height="400" alt="First slide">
      </div>
    </div>
  </div>
</div>


<h1> Alimentos secos </h1>
<div  class="container">
<!-- Card deck -->
<div class="card-deck">
  <!-- Card -->
    <div class="card mb-4" >
     <!--Card image-->
        <div class="view view-cascade" style="outline: none; width: 230px;">
            <img src="{{ url('/imagenes/seco1.webp') }}" class="card-img-top"
                alt="">
                <a>
                <div class="mask rgba-white-slight"></div>
                </a>
        </div>
            <div class="card-body card-body-cascade">
                <h5 class="pink-text"><i class="fas fa-utensils"></i> Alimento Para Perros </h5>
                <!--Title-->
                <h4 class="card-title"> 
                    @foreach ($ali1 as $p)
                    <BR> {{ $p }} 
                    @endforeach
                </h4>
                <a class="btn btn-unique">Button</a>
        </div>
    </div>
    <div class="card mb-4">
   <div class="view view-cascade" style="outline: none; width: 230px;">
        <img src="{{ url('/imagenes/seco2.webp') }}" class="card-img-top"
          alt="">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
      <!--/.Card image-->

      <!--Card content-->
      <div class="card-body card-body-cascade">
        <h5 class="pink-text"><i class="fas fa-utensils"></i> Alimento Para Perro</h5>
        <!--Title-->
        <h4 class="card-title">
        @foreach ($ali2 as $p)
   <BR> {{ $p }} 
@endforeach</h4>

        <a class="btn btn-unique">Button</a>
      </div>
      <!--/.Card content-->

  </div>

  <div class="card mb-4" >

<!--Card image-->
<div class="view view-cascade" style="outline: none; width: 230px;">
     <img src="{{ url('/imagenes/seco3.webp') }}" class="card-img-top"
       alt="">
     <a>
       <div class="mask rgba-white-slight"></div>
     </a>
   </div>
   <!--/.Card image-->

   <!--Card content-->
   <div class="card-body card-body-cascade">
     <h5 class="pink-text"><i class="fas fa-utensils"></i> Alimento Para Perro</h5>
     <!--Title-->
     <h4 class="card-title">@foreach ($ali3 as $p)
   <BR> {{ $p }} 
@endforeach</h4>
     <a class="btn btn-unique">Button</a>
   </div>
   <!--/.Card content-->

</div>

<div class="card mb-4" >

<!--Card image-->
<div class="view view-cascade" style="outline: none; width: 230px;">
     <img src="{{ url('/imagenes/seco3.webp') }}" class="card-img-top"
       alt="">
     <a>
       <div class="mask rgba-white-slight"></div>
     </a>
   </div>
   <!--/.Card image-->

   <!--Card content-->
   <div class="card-body card-body-cascade">
     <h5 class="pink-text"><i class="fas fa-utensils"></i> Alimento Para Perro</h5>
     <!--Title-->
     <h4 class="card-title">@foreach ($ali4 as $p)
   <BR> {{ $p }} 
@endforeach</h4>

     <a class="btn btn-unique">Button</a>
   </div>
   <!--/.Card content-->

</div>







</div>
</div>

</div>


<!------------------------------------------------------->

<h1> Alimentos humedo </h1>
<div  class="container">
<!-- Card deck -->
<div class="card-deck">
  <!-- Card -->
    <div class="card mb-4" >
     <!--Card image-->
        <div class="view view-cascade" style="outline: none; width: 230px;">
            <img src="{{ url('/imagenes/14.webp') }}" class="card-img-top"
                alt="">
                <a>
                <div class="mask rgba-white-slight"></div>
                </a>
        </div>
            <div class="card-body card-body-cascade">
                <h5 class="pink-text"><i class="fas fa-utensils"></i> Alimento Para Perros </h5>
                <!--Title-->
                <h4 class="card-title"> 
                    @foreach ($ali5 as $p)
                    <BR> {{ $p }} 
                    @endforeach
                </h4>
                <a class="btn btn-unique">Button</a>
        </div>
    </div>
    <div class="card mb-4">
   <div class="view view-cascade" style="outline: none; width: 230px;">
        <img src="{{ url('/imagenes/15.webp') }}" class="card-img-top"
          alt="">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
      <!--/.Card image-->

      <!--Card content-->
      <div class="card-body card-body-cascade">
        <h5 class="pink-text"><i class="fas fa-utensils"></i> Alimento Para Perro</h5>
        <!--Title-->
        <h4 class="card-title">
        @foreach ($ali6 as $p)
   <BR> {{ $p }} 
@endforeach</h4>

        <a class="btn btn-unique">Button</a>
      </div>
      <!--/.Card content-->

  </div>

  <div class="card mb-4" >

<!--Card image-->
<div class="view view-cascade" style="outline: none; width: 230px;">
     <img src="{{ url('/imagenes/16.webp') }}" class="card-img-top"
       alt="">
     <a>
       <div class="mask rgba-white-slight"></div>
     </a>
   </div>
   <!--/.Card image-->

   <!--Card content-->
   <div class="card-body card-body-cascade">
     <h5 class="pink-text"><i class="fas fa-utensils"></i> Alimento Para Perro</h5>
     <!--Title-->
     <h4 class="card-title">@foreach ($ali7 as $p)
   <BR> {{ $p }} 
@endforeach</h4>
     <a class="btn btn-unique">Button</a>
   </div>
   <!--/.Card content-->

</div>

<div class="card mb-4" >

<!--Card image-->
<div class="view view-cascade" style="outline: none; width: 230px;">
     <img src="{{ url('/imagenes/17.webp') }}" class="card-img-top"
       alt="">
     <a>
       <div class="mask rgba-white-slight"></div>
     </a>
   </div>
   <!--/.Card image-->

   <!--Card content-->
   <div class="card-body card-body-cascade">
     <h5 class="pink-text"><i class="fas fa-utensils"></i> Alimento Para Perro</h5>
     <!--Title-->
     <h4 class="card-title">@foreach ($ali8 as $p)
   <BR> {{ $p }} 
@endforeach</h4>

     <a class="btn btn-unique">Button</a>
   </div>
   <!--/.Card content-->

</div>







</div>
</div>

</div>
@stop