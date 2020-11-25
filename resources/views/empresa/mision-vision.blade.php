@extends('layout.master')
    @section('content')


     <div  class="container">
<!-- Card deck -->
<div class="card-deck">

  <!-- Card -->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="{{ url('/imagenes/mision.jpg') }}"
        alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Misión</h4>
      <!--Text-->
      <p class="card-text">La Misión de Tienda de Mascotas consiste en brindar una solución integral a la atención de la mascota, a partir de una inmejorable oferta de producto, precio, calidad y servicio.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      
    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="{{ url('/imagenes/vision.jpg') }}" 
        alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Visión</h4>
      <!--Text-->
      <p class="card-text">La Visión de Tienda de Mascotas es continuar siendo la empresa Nº 1 en la comercialización de productos para mascotas en la Región Patagónica, operando con sucursales en las principales ciudades</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
     

    </div>

  </div>
</div>
</div>
<!-- Card deck -->

     
    @stop