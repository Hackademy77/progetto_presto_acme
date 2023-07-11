<x-layout>
    <div class="container-fluid p-5 shadow mb-4">
        <div class="row">
            <div class="col-12 text-light p-5">
                <h1 class="display-2">Esplora la categoria : {{$category->name}}</h1>
            </div>
        </div>
    </div>
    <div class="container"> 
        <div class="row">
            @forelse($category->items as $item)
                <div class="col-6">
                <div class="card shadow text-light" style="width: 18rem;">
                <img src="https://picsum.photos/200" class="card-img-top rounded" alt="...">
                <div class="card-body text-light">
                    <h5 class="card-title text-light">{{$item->name}}</h5>
                    <p class="card-text text-light">{{$item->description}}</p>
                    <p class="card-text text-light">{{$item->price}}</p>
                    <a href="" class="btn btn-primary shadow text-light">Visualizza</a>
                    <a href="#" class= "text-light my-2 card-link border-top pt-2 border-dark shadow btn btn-success">{{$item->category->name}}</a>
                    <p class="card-footer text-light">{{$item->created_at->format('d/m/Y')}}
                    Pubblicato da : {{$item->user->name ?? ''}}</p> 
                </div>
                </div>
                </div>
            @empty
            <div class="col-12">
                <p class="text-light fs-2">Non ci sono annunci per questa categoria</p>
                <p class="text-light fs-1">Pubblica un annuncio per {{$category->name}} <a href="{{'items.create'}}" class="btn btn-success">Nuovo Annuncio</a></p>
            </div>
            @endforelse
        </div>
    </div>
</x-layout>