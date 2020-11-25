<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark light-blue ">
  <a class="navbar-brand" href="{{url('/')}}">
  
  
  Quiero a mi mascota</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item dropdown">

      
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          
          Tienda
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="{{url('/empresa/historia')}}">Quienes somos</a>
          <a class="dropdown-item" href="{{url('/empresa/mision-vision')}}">Misión y Visión</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Tienda del perro
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="{{url('/productosperro/alimentos')}}">Alimentos</a>
         
         
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Tienda del gato
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="{{url('/productosgato/alimento')}}">Alimento</a>
        
         
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/contactanos')}}">Contactos</a>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->