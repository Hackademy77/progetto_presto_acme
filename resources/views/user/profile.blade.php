<x-layout>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-3 pt-5 shadow bg-light rounded h-100">
                
                    <h3 class="text-center mt-5">Ciao, <span class="colorRed">{{Auth::user()->name}}</span>.</h3>
                    <div class="row">
                    <ul class="py-4 ">
                        <li class="py-4 text-center text-md-start">Utente dal : {{Auth::user()->created_at}}</li>
                        <li class="py-4 text-center text-md-start">Email : {{Auth::user()->email}}</li>
                        @if (Auth::user()->is_revisor)
                        <li class="py-4 text-center text-md-start">
                            Stato dell'account : <span class="colorRed">Revisore</span>
                        </li>
                        @elseif (Auth::user() != 'is_revisor' )
                        <li class="py-4">
                            Stato dell'account : <span class="text-success">Utente</span>
                        </li>
                        @endif
                    </ul>
                </div>
                
            </div>
            <div class="col-12 col-md-9 px-0">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="text-center mt-5">I tuoi annunci</h1>
                            <div class="container mt-5">
                                <div class="row justify-content-center">
                                    <div class="col-12 table-responsive">
                                        <table class="table table-striped table-revision">
                                            <thead>
                                                <tr class="fw-light">
                                                    <th scope="col">#</th>
                                                    <th scope="col">Articolo</th>
                                                    <th scope="col">Categoria</th>
                                                    <th scope="col">Prezzo</th>
                                                    <th scope="col">Online dal </th>
                                                    <th scope="col">Stato Ann.</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach (Auth::user()->items as $item)
                                                <tr>
                                                    <th scope="row">{{$item->id}}</th>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->category->name}}</td>
                                                    <td>{{$item->price}}€</td>
                                                    <td>{{$item->created_at}}</td>
                                                    @if ($item->is_accepted == null)
                                                    <td><p>In attesa di approvazione</p></td>
                                                    
                                                    @else
                                                    <td><p>Annuncio Online</p></td>
                                                    
                                                    @endif
                                                    
                                                    
                                                    {{-- <td> --}}
                                                        {{-- <a href="{{route('item.edit', $item)}}" class="btn btn-sm btn-warning">Modifica </a> --}}
                                                        {{-- <form action="{{route('item.delete', $item)}}" method="post">
                                                        </td> --}}
                                                        {{-- <td>
                                                            {{-- @method('DELETE') --}}
                                                            
                                                            
                                                            {{-- <button type="submit" class="btn btn-sm btn-danger">Elimina</button>
                                                        </td> --}}
                                                        
                                                        
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                @if(Auth::user()->is_revisor)
                                <div class="container-fluid ps-0">
                                    <div class="row">
                                        <div class="col-12 text-center mt-5">
                                            <h2 class="text-success mb-5">Work Zone</h2>
                                            <h2 class="mb-4">Annunci da revisionare</h2>
                                            <p class="text-center">
                                                <a href="{{ route('revisor.index', ['item' => $item]) }}" class="btn btn-primary">Dettaglio articoli da revisionare</a>
                                            <p>
                                        </div>
                                    </div>
                                </div>
                                    {{-- @dd($item_to_check) --}}
                                    <div class="container-fluid ps-0">
                                        <div class="row">
                                            <div class="col-12 table-responsive">
                                                <table class="table table-striped table-revision">
                                                    <thead>
                                                        <tr>
                                                            {{-- <th scope="col">#</th> --}}
                                                            <th scope="col">Articolo</th>
                                                            <th scope="col">Categoria</th>
                                                            <th scope="col">Prezzo</th>
                                                            <th scope="col">Pubbl. il </th>
                                                            <th scope="col">Pubbl. da </th>
                                                            <th scope="col">Accetta velocemente </th>
                                                            <th scope="col">Rifiuta velocemente</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                        
                                                        
                                                        @forelse ($item_to_check as $item)
                                                <tr>
                                                    <th scope="row">{{$item->id}}</th>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->category->name}}</td>
                                                    <td>{{$item->price}}€</td>
                                                    <td>{{$item->created_at}}</td>
                                                    <td>{{$item->user->name}}</td>
                                                    <td>
                                                        <form action="{{ route('profile.accept_item', ['item' => $item]) }}" method="POST">
                                                            @csrf
                                                            @method('PATCH')
                                                            <button class="btn btn-success shadow">Accetta</button>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('profile.reject_item', ['item' => $item]) }}" method="POST">
                                                            @csrf
                                                            @method('PATCH')
                                                            <button class="btn btn-danger shadow">Rifiuta</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="12">Non ci sono annunci da revisionare.</td>
                                                </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    
                                    </div>
                                </div>
                            </div>
                        
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        
    


    

    
    
    
</div>
</div>
            
        </x-layout>