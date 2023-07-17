<x-layout>
<div>
    <h2 class="text-center mt-5">{{__('ui.allAnnouncements')}}</h2>
    <div class="row">
        @foreach($items as $item)
        <x-card
        :item="$item"
        />
        @endforeach
    </div>
    <div class="container d-flex justify-content-center">
        {{$items->links()}}
    </div>
</div>
</x-layout>