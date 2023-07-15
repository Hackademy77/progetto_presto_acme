<x-layout>
    

    <div>
        <h3 class="text-center mt-5">Benvenuto {{Auth::user()->name}}</h3>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mt-5">I tuoi annunci</h1>
            </div>
        </div>
    </div>

    
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Articolo</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Prezzo</th>
                            <th scope="col">Pubblicato il </th>
                            <th scope="col">Stato Annuncio</th>
                            
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
        
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-5">
                    <h2 class="text-success mb-5">Work Zone</h1>
                        <h2 class="mb-4">Annunci da Revisionare</h2>
                    </div>
                </div>
            </div>
            {{-- @dd($item_to_check) --}}
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Articolo</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Prezzo</th>
                                    <th scope="col">Pubblicato il </th>
                                    <th scope="col">Pubblicato da </th>
                                    <th scope="col">Accetta </th>
                                    <th scope="col">Rifiuta</th>
                                    
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
                                <tr></tr>
                                @endforelse
                                
                                
                                
                                
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endif
            
        </x-layout>