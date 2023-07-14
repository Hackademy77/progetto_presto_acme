<x-layout>

    <h2 class="text-light text-center">Annunci</h2>
    <div class="container"> 
        <div class="row">
            @foreach($items as $item)
                <div class="col-6 col-md-4 my-5 d-flex justify-content-evenly">
                <div class="card shadow " style="width: 22rem;">
                <img src="https://picsum.photos/200" class="card-img-top rounded" alt="...">
                <div class="card-body">
                    <h5 class="card-title text">{{$item->name}}</h5>
                    <p class="card-text text">{{$item->description}}</p>
                    <p class="card-text ">Prezzo : {{$item->price}} €</p>
                    <a href="{{route ('item.show',$item)}}" class=" btn btn-primary shadow">Visualizza</a>
                    <a href="{{route ('categoryShow',$item->category)}}" class="my-2 card-link border-top pt-2 border-dark shadow btn btn-success">{{$item->category->name}}</a>
                    <p class="card-footer ">
                        Pubblicato da {{$item->user->name ?? ''}} il {{$item->created_at->format('d/m/Y')}}</p> 
                </div>
                </div>
                </div>
            @endforeach
            <div class="container d-flex justify-content-center">

                        {{$items->links()}}

                </div>
            
        </div>
    </div>
    <div class="vh-100"></div>
</x-layout>