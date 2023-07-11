<x-layout>

<div class="container">
    <div class="row">
        @foreach($items as $item)
            <div class="col-4">
             <x-card
             itemimg="{{$item['img']}}"
             itemname="{{$item['name']}}"
             itemcategory="{{$item['category']}}"
             itemdescriione="{{$item['description']}}"
             />
            </div>
        @endforeach
    </div>
</div>


</x-layout>