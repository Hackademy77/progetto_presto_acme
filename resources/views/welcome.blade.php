<x-layout>
    <div class="container"> 
        <div class="row">
            @foreach($items as $item)
                <div class="col-6 col-md-4 my-5">
                <div class="card shadow " style="width: 18rem;">
                <img src="https://picsum.photos/200" class="card-img-top rounded" alt="...">
                <div class="card-body">
                    <h5 class="card-title text">{{$item->name}}</h5>
                    <p class="card-text text">{{$item->description}}</p>
                    <p class="card-text text">{{$item->price}}</p>
                    <a href="{{route ('item.show',$item)}}" class=" btn btn-primary shadow">Visualizza</a>
                    <a href="#" class="my-2 card-link border-top pt-2 border-dark shadow btn btn-success">{{$item->category->name}}</a>
                    <p class="card-footer">{{$item->created_at}}</p>
                </div>
                </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>