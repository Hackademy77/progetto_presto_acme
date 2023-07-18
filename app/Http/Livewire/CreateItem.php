<?php

namespace App\Http\Livewire;

use App\Models\Item;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class CreateItem extends Component
{

    use WithFileUploads;

    public $name;
    public $description;
    public $price;
    public $category_id;
    public $temporary_images = [];
    public $images = [];
    public $item;

    protected $rules = [
        'name'=>'required',
        'description'=>'required',
        'category_id'=>'required',
        'price'=>'required',
        'images.*' => 'image|max:1024',
        'temporary_images.*' => 'image|max:1024'
    ];


    protected $messages = [
        'required' => 'il campo :attribute è richiesto',
        'min' => 'Il campo  :attribute è troppo corto',
        'temporary_images.required' => 'L\' immagine è richiesta',
        'temporary_images.*.image' => 'I file devono essere immagini',
        'temporary_images.*.max' => 'L\' immagine dev\' essere massimo di 1mb',
        'images.image' => 'L\' immagine dev\'essere un\' immagine',
        'images.max' => 'L\' immagine dev\' essere massimo di 1mb'

    ];


    public function updatedTemporaryImages(){
        if($this->validate([
            'temporary_images.*' => 'image|max:1024',
        ])) {
            foreach($this->temporary_images as $image){
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key){
        if(in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }

    public function store(){
        
        
        $this->validate();

        $this->item = new Item([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'user_id' => Auth::id(),
        ]);
    
        $category = Category::find($this->category_id);
        $this->item->category()->associate($category);
    
        $this->item->save();
       
        
        if(count($this->images)){
            foreach ($this->images as $image) {
                $this->item->images()->create(['path' => $image->store('images', 'public')]);
            }
  
        }

        
        session()->flash('message', 'Articolo inserito con successo, sarà pubblicato dopo la revisione');

        $this->cleanForm();
        
        
    }

    public function updated($propertyName){
        $this->validateOnly($propertyName); 
    }

    public function cleanForm(){

        $this->name = '';
        $this->description = '';
        $this->category = '';
        $this->price = '';
        $this->images = [];
        $this->temporary_images = [];


    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.create-item', compact('categories'));
    }
}
