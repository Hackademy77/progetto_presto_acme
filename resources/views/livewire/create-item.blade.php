

<form wire:submit.prevent="store()" class="mt-5">
  @if(session('message'))
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
      {{session('message')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
  <div class="mb-3">
    <label for="name" class="form-label fs-5"><b>{{__('ui.nameCreate')}}</b> </label>
    <input type="text" class="form-control border border-dark" wire:model.lazy="name">
    @error('name') <span class="error text-success">{{$message}}</span> @enderror
  </div>
  <div class="mb-3">
    <label for="category_id" class="form-label fs-5"><b>{{__('ui.categoryCreate')}}</b></label>
    <select wire:model.defer="category_id">
        <option value="" selected>{{ __('ui.selectCategoryPlaceholder') }}</option>
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>
    @error('category_id') <span class="error text-success">{{$message}}</span> @enderror
</div>
  <div class="mb-3">
    <label for="price" class="form-label fs-5"><b>{{__('ui.priceCreate')}}</b></label>
    <input type="numeric" class="form-control border border-dark" wire:model="price">
    @error('price') <span class="error text-success">{{$message}}</span> @enderror
  </div>
  <div class="mb-3">
    <label for="description" class="form-label fs-5"><b>{{__('ui.descriptionCreate')}}</b></label>
    <input type="text" class="form-control border border-dark" wire:model.lazy="description" style="height: 80px">
    @error('description') <span class="error text-success">{{$message}}</span> @enderror
  </div>
  <div class="mb-3">
    <input wire:model="temporary_images" type="file" multiple class="form-control border border-dark shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img"/>
    @error('temporary_images.*')
    <p class="text-danger mt_2">{{$message}}</p>
    @enderror
  </div>
  @if(!empty($images))
  {{-- <div class="container w-100"></div> --}}
    <div class="row">
      <div class="col-12">
        <p>Photo preview:</p>
        <div class="row border border-4 login-card rounded shadow py-4">
          @foreach($images as $key => $image)
          <div class="col-12 my-3">
            <div class="img-preview mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl()}})"></div>
            <button class="btn btn-danger shadow d-block text-center mt-2 mx-auto" type="button" wire:click="removeImage({{$key}})">{{__('ui.deletebtn')}}</button>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    @endif
  <button type="submit" class="btn btn-primary">{{__('ui.submitCreate')}}</button>
</form>