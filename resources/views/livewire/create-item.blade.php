<form wire:submit.prevent="store()" class="mt-5">
  <div class="mb-3">
    <label for="name" class="form-label fs-5"><b>Nome</b> </label>
    <input type="text" class="form-control" wire:model="name">
    @error('name') <span class="error text-success">{{$message}}</span> @enderror
  </div>
  <div class="mb-3">
    <label for="category_id" class="form-label fs-5"><b>Categoria</b></label>
    <select wire:model.defer="category_id">
      @foreach($categories as $category)
      <option value="{{$category->id}}">{{$category->name}}</option>
      @endforeach
    </select>
    @error('category_id') <span class="error text-success">{{$message}}</span> @enderror
  </div>
  <div class="mb-3">
    <label for="price" class="form-label fs-5"><b>Prezzo</b></label>
    <input type="numeric" class="form-control" wire:model="price">
    @error('price') <span class="error text-success">{{$message}}</span> @enderror
  </div>
  <div class="mb-3">
    <label for="description" class="form-label fs-5"><b>Descrizione</b></label>
    <input type="text" class="form-control" wire:model="description">
    @error('description') <span class="error text-success">{{$message}}</span> @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>