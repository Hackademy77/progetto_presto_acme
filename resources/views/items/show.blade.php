<x-layout>
    <div class="container-fluid p-5 shadow mb-4">
        <div class="row">
            <div class="col-12 p-5">
                <h1 class="display-2 text-light">Annuncio : {{$item->name}}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-10">
                <div class="carousel-slide" id="showCarousel" data-bs-ride="carousel">
                    <div class="carousel-item active">
                        <img src="https://picsum.photos/id/27/1000/400" class="img-fluid p-3 rounded" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/id/27/1000/400" class="img-fluid p-3 rounded" alt="">
                    </div>
                    <div class="carousel-item active">
                        <img src="https://picsum.photos/id/27/1000/400" class="img-fluid p-3 rounded" alt="">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel"
                data-bs-slide="prev">
                <span class="carouse-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden text-light">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#showCarousel"
                data-bs-slide="next">
                <span class="carouse-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden text-light">Next</span>
                </button>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h5 class="card-title text-light">Titolo: {{$item->title}}</h5>
                    <p class="card-text text-light">Descrizione: {{$item->description}}</p>
                    <p class="card-text text-light">Prezzo : {{$item->price}}</p>
                    <a href="{{route('categoryShow',['category'=>$item->category])}}" class="my-2 border-top pt-2 border-light card-link shadow btn btn-primary text-light">Categoria : {{$item->category->name}}</a>
                    <p class="card-footer text-light">Pubblicato il {{$item->created_at->format('d/m/Y')}} - Pubblicato da {{$announcement->user->name ??''}}</p>

                </div>
            </div>
    </div>
</x-layout>