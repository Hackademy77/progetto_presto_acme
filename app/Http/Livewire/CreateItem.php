<?php

namespace App\Http\Livewire;

use App\Models\Item;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CreateItem extends Component
{
    public $name;
    public $description;
    public $price;
    public $category_id;

    protected $rules = [
        'name'=>'required',
        'description'=>'required',
        'category_id'=>'required',
        'price'=>'required',
    ];

    public function updated(){
        $this->validate(); 
    }
    

    public function store(){
        $this->validate(); 

       Item::create([
            'user_id'=>Auth::user()->id,
            'name' => $this->name,
            'price' => $this->price,
            'description' => $this->description,
            'category_id' => $this->category_id,
        ]);

       
        $this->reset();

        return to_route('home')->with('message', 'Annuncio aggiunto correttamente');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.create-item', compact('categories'));
    }
}
