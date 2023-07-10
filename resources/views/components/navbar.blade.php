<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        @if(Auth::user() != null)
        <li class="nav-item">
          <p class="nav-link">{{Auth::user()->name}}</p>
        </li>
        <li class="nav-item">
          <form action="{{route('logout')}}" method="post" class="nav-link">
          @csrf
            <button type="submit">Logout</button>
          </form>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('item.create')}}">Aggiungi prodotto</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('register')}}">Registrati</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('login')}}">Accedi</a>
        </li>
        @endif
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>