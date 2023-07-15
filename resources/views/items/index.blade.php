<x-layout>

    <h2 class="text-light text-center">Annunci</h2>
    <div class="row">
        @foreach($items as $item)
            <div class="col-12 col-md-3 d-flex justify-content-evenly">
                <div class="card shadow card-custom" style="width: 20rem;">
                    <img src="https://picsum.photos/200/150" class="rounded mx-2 mt-2 mb-4" alt="...">
                    <div>
                        <h5 class="card-title text-center">{{$item->name}}</h5>
                        <p class="card-text text-center">{{$item->description}}</p>
                        <div class="row d-flex justify-content-around align-items-center">
                            <p class="col-md-5 col-5 d-flex my-0 text-start ms-2">Prezzo:</p>
                            <p class="col-md-6 col-6 card-text px-0">{{$item->price}}</p>
                        </div>
                        <div class="d-flex justify-content-around align-items-center">
                            <p class="col-md-5 col-5 my-0 text-start ms-2">Categoria:</p>
                            <a href="{{route ('categoryShow',$item->category)}}" class="col-md-6 col-6 link-category-custom">{{$item->category->name}}</a>
                        </div>
                        <div class="d-flex justify-content-center my-2">
                            <button class="button-82-pushable mt-4" type="submit" role="button">
                                <span class="button-82-shadow"></span>
                                <span class="button-82-edge"></span>
                                <span class="button-82-front text">
                                    <a href="{{route ('item.show',$item)}}" class="link-custom">Visualizza</a>
                                </span>
                            </button>
                        </div>
                        <p class="card-footer text-center">{{$item->created_at->format('d/m/Y')}}</p>
                        <p class="text-center">Pubblicato da : {{$item->user->name ?? ''}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
            <div class="container d-flex justify-content-center">

                        {{$items->links()}}

                </div>
            
        </div>
    </div>
    <div class="vh-100"></div>
</x-layout>