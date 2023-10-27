<nav class="navbar bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Diario Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link  {{ request()->routeIs('apodoInicio')?'text-danger':''}}"  href="{{route('apodoInicio')}}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  {{ request()->routeIs('apodoFormulario')?'text-danger':''}}"   href="{{route('apodoFormulario')}}">Formulario</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>