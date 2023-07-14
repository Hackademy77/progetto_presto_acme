<x-layout>
    <div class="container-fluid shadow pt-3">
        <div class="row">
            <div class="col-12">
                <h4 class="display-5">Esplora la categoria : {{$category->name}}</h1>
            </div>
        </div>
    </div>
    <div class="container mb-5 custom-margin-top"> 
        <div class="row">
            @forelse($items as $item)
                <div class="col-6 col-md-4 my-5 d-flex justify-content-evenly">
                <div class="card shadow " style="width: 18rem;">
                <img src="https://picsum.photos/200" class="card-img-top rounded" alt="...">
                <div class="card-body">
                    <h5 class="card-title ">{{$item->name}}</h5>
                    <p class="card-text ">{{$item->description}}</p>
                    <p class="card-text ">Prezzo : {{$item->price}} €</p>
                    <a href="{{route ('item.show',$item)}}" class="btn btn-primary shadow ">Visualizza</a>
                    <a href="{{route ('categoryShow',$item->category)}}" class= " my-2 card-link border-top pt-2 border-dark shadow btn btn-success">{{$item->category->name}}</a>
                    <p class="card-footer ">
                        Pubblicato da {{$item->user->name ?? ''}} il {{$item->created_at->format('d/m/Y')}}</p> 
                </div>
                </div>
                </div>
            @empty
            <div class="col-12">
                <p class=" fs-2">Non ci sono annunci per questa categoria</p>
                <p class=" fs-1">Pubblica un annuncio per {{$category->name}} <a href="{{route('item.create')}}" class="btn custom-button-color">Nuovo Annuncio</a></p>
            </div>
            @endforelse
        </div>
    </div>
</x-layout>