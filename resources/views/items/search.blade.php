<x-layout>

<div class="mt-5"><h3>Risultati per la parola :  "{{ $chiaveDiRicerca }}"</h3></div>

<div class="mt-5"><a href="/" class="btn btn-primary shadow ">Torna alla Home</a></div>
<div class="container">
    <div class="row">
        @foreach($arrBySearch as $item)
            
                <x-card
                :item="$item"
                />
        @endforeach
    </div>
</div>


</x-layout>