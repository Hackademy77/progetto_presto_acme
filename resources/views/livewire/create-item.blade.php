<form wire:submit.prevent="store()">
  <div class="mb-3">
    <label for="name" class="form-label">Nome</label>
    <input type="text" class="form-control" wire:model="name">
    @error('name') <span class="error text-success">{{$message}}</span> @enderror
  </div>
  <div class="mb-3">
    <label for="category_id" class="form-label">Categoria</label>
    <select wire:model.defer="category_id">
      @foreach($categories as $category)
      <option value="{{$category->id}}">{{$category->name}}</option>
      @endforeach
    </select>
    @error('category_id') <span class="error text-success">{{$message}}</span> @enderror
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Prezzo</label>
    <input type="numeric" class="form-control" wire:model="price">
    @error('price') <span class="error text-success">{{$message}}</span> @enderror
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Descrizione</label>
    <input type="text" class="form-control" wire:model="description">
    @error('description') <span class="error text-success">{{$message}}</span> @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>