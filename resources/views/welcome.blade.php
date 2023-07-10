<x-layout>

    <h2>fghjkl</h2>
    <div class="container"> 
        <div class="row">
            @foreach($items as $item)
                <div class="col-6">
                <div class="card" style="width: 18rem;">
                <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$item->name}}</h5>
                    <p class="card-text">{{$item->price}}</p>
                    <p class="card-text">{{$item->description}}</p>
                    <a href="#" class="btn btn-primary">{{$item->category->name}}</a>
                    <p class="card-text">{{$item->created_at}}</p>
                </div>
                </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>