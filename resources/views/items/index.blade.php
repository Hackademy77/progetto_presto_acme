<x-layout>
    <x-navbar/>
    
<div class="container-fluid">
    <div class="row flex-column flex-md-row">
    
    <div class="col-12 col-md-8 order-2 order-md-1">
        <div class="row">
            <h2 class="text-center mt-5">{{__('ui.allAnnouncements')}}</h2>
        @foreach($items as $item)
        <x-card
        :item="$item"
        />
        @endforeach
    </div>
    </div>
    <div class="col-12 col-md-4 order-1 order-md-2 d-none d-md-inline-flex flex-column align-items-">
        <x-categorygrid />

    </div>
</div>
</div>

<div class="container d-flex justify-content-center">
    {{$items->links()}}
</div>
</x-layout>