<nav class="navbar navbar-expand-lg nav-custom">
  <div class="container-fluid py-2">
    <a class="navbar-brand fs-2 fw-2 col-1 d-flex align-items-center" href="/">
      <img class="img-navbar" src="./img/arrow.png" alt="">
    </a>
    <button class="navbar-toggler order-last ms-2 me-5" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>    
    <form action="{{route('item.search')}}" class="d-flex col-md-3 col-6" role="search">
      <input name="searched" class="form-control input-custom me-2" type="search" placeholder="Ricerca..." aria-label="Search">
      <button class="button-82-pushable" type="submit" role="button">
        <span class="button-82-shadow"></span>
        <span class="button-82-edge"></span>
        <span class="button-82-front text">
          Cerca
        </span>
      </button>
    </form>
    <div class="collapse navbar-collapse col-md-3" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-center align-items-center w-100">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Home</a>
        </li>
        @if(Auth::user() != null)
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Miei Annunci
          </a>
          <ul class="dropdown-menu"  aria-labelledby="categoriesDropdown">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{route('item.create')}}">Aggiungi prodotto</a>
            </li> 
            @auth
            @if(Auth::user()->is_revisor)
            <li>
                <a class="nav-link" aria-current="page" href="{{route('revisor.index')}}">Zona Revisore
                <span class="" >{{App\Models\Item::toBeRevisionedCount()}} <span class="visually-hidden">unread messages</span></span>
                </a>
            </li>        
            @endif 
            @endauth 
          </ul>
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
          <a class="nav-link" aria-current="page" href="{{route('item.index')}}">Annunci</a>
        </li>
        <div class="collapse navbar-collapse col-md-1 order-md-last mx-3 d-flex justify-content-end">
        </ul>
          @if(Auth::user() != null)
          <ul class="ps-0 row align-items-center my-0 col-md-5 justify-content-end">
            <li class="nav-item col-12 col-md-5 px-0 d-flex align-items-center text-center">
              <p class="nav-link mb-0">{{Auth::user()->name}}</p>
              <a href="{{ route('user.profile') }}"><i class="fa-solid fa-user ms-3 " style="color: #f0003c;"></i></a>
            </li>
            <li class="nav-item col-12 col-md-5 px-3 d-flex justify-content-start">
              <form action="{{route('logout')}}" method="post" class="nav-link ">
                @csrf
                <button class="d-flex justify-content-center align-items-center button-custom" type="submit"><i class="fa-solid fa-right-from-bracket fa-xl"></i></button>
              </form>
            </li>
          </ul>
          @else
          <div class="order-md-last">
            <ul class="ps-0 row align-items-center my-0 me-3">
              <li class="nav-item col-12 col-md-12 col-lg-6 pe-4">
                <a class="nav-link" aria-current="page" href="{{route('register')}}">Registrati</a>
              </li>
              <li class="nav-item col-12 col-md-12 col-lg-6 pe-4">
                <a class="nav-link" aria-current="page" href="{{route('login')}}">Accedi</a>
              </li>
            </ul>
          </div>
          @endif
        </ul>
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