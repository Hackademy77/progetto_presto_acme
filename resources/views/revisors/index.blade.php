<x-layout>
    
    @if ($item_to_check)
    <div class="container-fluid p-5 bg-gradient  shadow mb-1">
        <div class="row">
            <div class="col-12 p-1">
                <h1 class="display-5">
                    {{__('ui.tobeReviewed')}}
                </h1>
            </div>
        </div>
    </div>
    
    <div class="container mb-5 pb-5">
        <div class="row justify-content-between mt-3 h-75">
            <div class="col-12 col-md-5">
                <div id="carouselExampleFade" class="carousel slide carousel-fade">
                    <div class="carousel-inner">
    
                        @if ($item_to_check->images->isEmpty())
                    
                            <div class="carousel-item active">
                                <img src="https://picsum.photos/501" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/501" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/502" class="d-block w-100" alt="...">
                            </div>
                        @else
                    
                            @foreach($item_to_check->images as $image)
                                <div class="carousel-item @if($loop->first) active @endif">
                                    <img src="{{ $image->getUrl(300, 200) }}" class="d-block w-100" alt="...">
                                </div>
                            @endforeach
                        @endif
                    </div>
                    
                        
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
            </div>
            <div class="col-12 col-md-6 mt-3">
                <h4 class="card-title my-3">{{__('ui.articleNameRev')}}: {{ $item_to_check->name }}</h4>
                <p class="card-text fs-5">{{__('ui.descriptionRev')}}: {{ $item_to_check->description }}</p>
                <p class="card-text my-3 fs-5">{{__('ui.priceShow')}} : {{$item_to_check->price}} €</p>
                <a href="{{route('categoryShow',['category'=>$item_to_check->category])}}" class="border-top border-light card-link shadow btn btn-primary">{{__('ui.categoryShow')}} : {{$item_to_check->category->name}}</a>
                <p class="card-footer mt-3 fs-5">{{__('ui.publishedonRev')}}: {{ $item_to_check->created_at->format('d/m/Y') }}</p>
                <p class="card-text fs-5">{{__('ui.publishedfromRev')}}: {{ $item_to_check->user->name }}</p>
                <div class="d-flex justify-content-start">
                    <form action="{{ route('revisor.accept_item', ['item' => $item_to_check]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-success shadow me-5">{{__('ui.acceptTab')}}</button>
                    </form>
                    <form action="{{ route('revisor.reject_item', ['item' => $item_to_check]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-danger shadow ms-5">{{__('ui.rejectTab')}}</button>
                    </form>
                    @if ($last_accepted_or_rejected_item)
                    <form action="{{ route('revisor.undoAction') }}" method="POST">
                        @csrf
                        <button class="btn btn-warning shadow">{{__('ui.revertRevisionbtn')}}</button>
                    </form>
                @endif
                </div>
            </div>
            
        </div>
    
        @else
        <div class="container-fluid p-5 bg-gradient shadow mb-1">
            <div class="row">
                <div class="col-12 p-1">
                    <h1 class="display-5">
                        {{__('ui.noItemsRevPage')}}
                    </h1>
                    <h3>{{__('ui.tryLaterRevPage')}}</h3>
                    @if ($last_accepted_or_rejected_item)
                        <form action="{{ route('revisor.undoAction') }}" method="POST">
                            @csrf
                            <button class="btn btn-warning shadow">{{__('ui.revertRevisionbtn')}}</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
    
    @endif
    <div style="height: 300px"></div>
</x-layout>