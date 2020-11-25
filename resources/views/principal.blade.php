<!DOCTYPE html>
@extends('layout.master')
    @section('content')


<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
    <li data-target="#carousel-example-2" data-slide-to="3"></li>
    <li data-target="#carousel-example-2" data-slide-to="4"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="{{ url('/imagenes/presentacion1.webp') }}" height="350" alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Bienvenidos a quiero mi mascota</h3>
      </div>
    </div>
   
    <div class="carousel-item">
      <div class="view">
        <img class="d-block w-100" src="{{ url('/imagenes/presentacion2.webp') }}" height="350" alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Bienvenidos a quiero mi mascota</h3>
      </div>
    </div>

    <div class="carousel-item">
      <div class="view">
        <img class="d-block w-100" src="{{ url('/imagenes/presentacion3.webp') }}" height="350" alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Bienvenidos a quiero mi mascota</h3>
      </div>
    </div>

    <div class="carousel-item ">
      <div class="view">
        <img class="d-block w-100" src="{{ url('/imagenes/presentacion4.webp') }}" height="350" alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Bienvenidos a quiero mi mascota</h3>
      </div>
    </div>

    <div class="carousel-item ">
      <div class="view">
        <img class="d-block w-100" src="{{ url('/imagenes/presentacion5.webp') }}" height="350" alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Bienvenidos a quiero mi mascota</h3>
      </div>
    </div>



   
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

    @stop