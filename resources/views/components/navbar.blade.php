<nav class="navbar navbar-expand-lg nav-custom container-fluid">
  <div class="container-fluid py-2">
    <div class="row justify-content-between">
    <a class="navbar-brand col-2 d-flex align-items-center" href="/">
      <img class="img-fluid" src="/storage/img/arrow.png" width="80" height="90" alt="">
    </a>
    <button class="navbar-toggler order-last me-2 col-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>    
    <form action="{{route('item.search')}}" class="d-flex col-md-7 col-6 mx-2" role="search">
      <input name="searched" class="form-control input-custom me-2" type="search" placeholder="{{__('ui.search')}}
" aria-label="Search">
      <button class="button-82-pushable" type="submit" role="button">
        <span class="button-82-shadow"></span>
        <span class="button-82-edge"></span>
        <span class="button-82-front text">
          <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>
        </span>
      </button>
    </form>
  </div>
    <div class="collapse navbar-collapse col-md-8" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-center align-items-center w-100">
        <li class="nav-item col-12 col-md-1 d-flex justify-content-center">
          <a class="nav-link text-center" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <x-_locale lang='it' />
        </li>
        <li class="nav-item">
          <x-_locale lang='en' />
        </li>
        <li class="nav-item">
          <x-_locale lang='es' />
        </li>
        @if(Auth::user() != null)
        <li class="nav-item dropdown col-12 col-md-3 d-flex flex-column align-items-center justify-content-center">
          <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{__('ui.myAdvertisements')}}
          </a>
          <ul class="dropdown-menu"  aria-labelledby="categoriesDropdown">
            <li class="nav-item col-12 text-center">
              <a class="nav-link" aria-current="page" href="{{route('item.create')}}">Aggiungi prodotto</a>
            </li> 
            @auth
            @if(Auth::user()->is_revisor)
            <li class="nav-item col-12 text-center">
                <a class="nav-link" aria-current="page" href="{{route('revisor.index')}}">{{__('ui.reviewerArea')}}
                <span class="" >{{App\Models\Item::toBeRevisionedCount()}} <span class="visually-hidden">unread messages</span></span>
                </a>
            </li>        
            @endif 
            @endauth 
          </ul>
        </li>
                
        @endif
           
        <li class="nav-item dropdown col-md-3 col-12 d-flex flex-column justify-content-center align-items-center">
          <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{__('ui.categories')}}
          </a>
          <ul class="dropdown-menu"  aria-labelledby="categoriesDropdown">
            @foreach ($categories as $category)
              <li class="text-center">
                <a class="dropdown-item" href="{{route('categoryShow',compact('category'))}}">{{($category->name)}}</a>
              </li>
              <li><hr class="dropdown-divider"></li>
            @endforeach
          </ul>
        </li>
        <li class="nav-item col-12 col-md-3">
          <a class="nav-link" aria-current="page" href="{{route('item.index')}}">{{__('ui.advertisements')}}</a>
        </li>
        <div class="collapse navbar-collapse col-md-1 order-md-last mx-3 d-flex justify-content-end">
        </ul>
          @if(Auth::user() != null)
            <ul class="ps-0 row align-items-center my-0 col-md-5 justify-content-end">
            
            <li class="nav-item col-6 col-md-5 px-0 d-flex align-items-center text-center justify-content-end">
              <a href="{{ route('user.profile') }}"><i class="fa-solid fs-4 fa-user fa-xl ms-3 " style="color: #f0003c;"></i></a>
            </li>
          
            <li class="nav-item col-6 col-md-5 px-3 d-flex justify-content-start">
            <form action="{{route('logout')}}" method="post" class="nav-link ">
              @csrf
              <button class="justify-content-center align-items-center button-logout" type="submit"><i class="fa-solid fa-sign-out fa-xl"></i></button>
            </form>
          </li>
        </ul>

            </div>
          
          @else
          <div class="order-md-last">
            <ul class="ps-0 row align-items-center my-0 me-3">
              <li class="nav-item col-12 col-md-12 col-lg-6 pe-4">
                <a class="nav-link" aria-current="page" href="{{route('register')}}">{{__('ui.signUp')}}</a>
              </li>
              <li class="nav-item col-12 col-md-12 col-lg-6 pe-4">
                <a class="nav-link" aria-current="page" href="{{route('login')}}">{{__('ui.login')}}</a>
              </li>
            </ul>
          </div>
          @endif
        </ul>
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