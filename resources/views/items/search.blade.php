<x-layout>
    <x-navbar/>



<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-3"> 
            <div class="mt-5 ms-5 ps-5"><a href="/"><button class=" shadow btn-cardz btn-one rounded">{{__('ui.backtoHomebtn')}}</button></a>
            </div>
        </div>
    </div>
    
    <div class="row">
        
        @forelse($items as $item)
            
                <x-card
                :item="$item"
                />
        @empty
            <div class="col-12">
                <div class="alert alert-warning py-3 shadow">
                    <p>Non ci sono annunci corrispondenti!!</p>
                </div>
            </div>
        @endforelse
        {{$items->links()}}
    </div>
</div>


</x-layout>