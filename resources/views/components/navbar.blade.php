<nav class="navbar navbar-expand-lg nav-custom">
  <div class="container-fluid py-2">
    <a class="navbar-brand fs-2 fw-2" href="/">Presto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-center w-100">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Home</a>
        </li>
        @if(Auth::user() != null)
          <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{route('item.create')}}">Aggiungi prodotto</a>
          </li>        
        @endif
        @auth
        @if(Auth::user()->is_revisor)
          <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{route('revisor.index')}}">Zona Revisore
              <span class="" >{{App\Models\Item::toBeRevisionedCount()}} <span class="visually-hidden">unread messages</span></span>
              </a>
          </li>        
        @endif 
        @endauth   
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorie
          </a>
          <ul class="dropdown-menu"  aria-labelledby="categoriesDropdown">
            @foreach ($categories as $category)
              <li>
                <a class="dropdown-item" href="{{route('categoryShow',compact('category'))}}">{{($category->name)}}</a>
              </li>
              <li><hr class="dropdown-divider"></li>
            @endforeach
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{route('item.index')}}">Tutti gli Annunci</a>
        </li>
      </ul>
        @if(Auth::user() != null)
        <ul class="ps-0 row align-items-center my-0 me-4">
          <li class="nav-item col-12 col-md-6 px-0 pt-2">
            <p class="nav-link">{{Auth::user()->name}}</p>
          </li>
          <li class="nav-item col-12 col-md-6 px-3">
            <form action="{{route('logout')}}" method="post" class="nav-link">
              @csrf
              <button type="submit"><i class="fa-solid fa-right-from-bracket fa-xl"></i></button>
            </form>
          </li>
        </ul>
        @else
        <ul class="ps-0 row align-items-center my-0">
          <li class="nav-item col-12 col-md-6 pe-4">
            <a class="nav-link" aria-current="page" href="{{route('register')}}">Registrati</a>
          </li>
          <li class="nav-item col-12 col-md-6 pe-4">
            <a class="nav-link" aria-current="page" href="{{route('login')}}">Accedi</a>
          </li>
        </ul>
        @endif
        <form action="{{route('item.search')}}" class="d-flex" role="search">
          <input name="searched" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
  </div>
</nav>

@if(session('message'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{session('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session('access.denied'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{session('access.denied')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif