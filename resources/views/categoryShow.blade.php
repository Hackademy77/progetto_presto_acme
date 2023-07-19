<x-layout>
    <x-navbar/>
    <div class="container-fluid shadow pt-3">
        <div class="row">
            <div class="col-12">
                <h4 class="display-5 text-center">{{__('ui.exploreCategory')}} : {{$category->name}}</h1>
            </div>
        </div>
    </div>
    <div class="container custom-margin-top"> 
        <div class="row justify-content-evenly">
            @forelse($items as $item)
            <x-card
        :item="$item"
        />
            @empty
            <div class="col-12">
                <p class=" fs-2">{{__('ui.noItemsCategory')}}</p>
                <p class=" fs-1">{{__('ui.publishinCategory')}} : <span class="text-danger">{{$category->name}}</span>  <a href="{{route('item.create')}}" class="btn custom-button-color">{{__('ui.newAnnCat')}}</a></p>
            </div>
            @endforelse
        </div>
    </div>
</x-layout>