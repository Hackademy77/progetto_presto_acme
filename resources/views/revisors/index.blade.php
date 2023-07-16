<x-layout>
    @if ($item_to_check)
    <div class="container-fluid p-5 bg-gradient  shadow mb-1">
        <div class="row">
            <div class="col-12 p-1">
                <h1 class="display-5">
                    Ecco l'annuncio da revisionare
                </h1>
            </div>
        </div>
    </div>
    
    <div class="container mb-5 pb-5">
        <div class="row justify-content-evenly">
            <div class="col-12 col-md-5">
                <div id="carouselExampleFade" class="carousel slide carousel-fade">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/500" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/501" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/502" class="d-block w-100" alt="...">
                        </div>
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
            <div class="col-12 col-md-5 mt-3">
                <h5 class="card-title my-3">Nome articolo: {{ $item_to_check->name }}</h5>
                <p class="card-text">Descrizione: {{ $item_to_check->description }}</p>
                <p class="card-footer mt-5">Pubblicato il: {{ $item_to_check->created_at->format('d/m/Y') }}</p>
                <p class="card-text">Pubblicato da: {{ $item_to_check->user->name }}</p>
                <div class="d-flex justify-content-between">
                    <form action="{{ route('revisor.accept_item', ['item' => $item_to_check]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-success shadow">Accetta</button>
                    </form>
                    <form action="{{ route('revisor.reject_item', ['item' => $item_to_check]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-danger shadow">Rifiuta</button>
                    </form>
                    @if ($last_accepted_or_rejected_item)
                    <form action="{{ route('revisor.undoAction') }}" method="POST">
                        @csrf
                        <button class="btn btn-warning shadow">Annulla l'ultima revisione</button>
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
                        Non ci sono annunci da revisionare!
                    </h1>
                    <h3>Prova più tardi</h3>
                    @if ($last_accepted_or_rejected_item)
                        <form action="{{ route('revisor.undoAction') }}" method="POST">
                            @csrf
                            <button class="btn btn-warning shadow">Annulla l'ultima revisione</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endif
</x-layout>