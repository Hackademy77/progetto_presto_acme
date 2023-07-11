<nav class="navbar navbar-expand-lg nav-custom">
  <div class="container-fluid py-2">
    <a class="navbar-brand" href="#">Navbar</a>
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
        <ul class="ps-0">
          <li class="nav-item">
            <p class="nav-link">{{Auth::user()->name}}</p>
          </li>
          <li class="nav-item w-100">
            <form action="{{route('logout')}}" method="post" class="nav-link">
              @csrf
              <button type="submit">Logout</button>
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
    </div>
  </div>
</nav>