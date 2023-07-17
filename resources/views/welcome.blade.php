<x-layout>

    <x-header />

    <div class="container my-5"> 
    <h2 class="text-center">{{__('ui.latestarticles')}}</h2>
    <div class="row">
    @foreach($items as $item)
    <x-card 
        :item="$item"
    />
    @endforeach
    </div>
    </div>

</x-layout>