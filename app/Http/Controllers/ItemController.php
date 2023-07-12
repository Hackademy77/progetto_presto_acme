<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function search(Request $request) {
        $items = Item::all();
        $chiaveDiRicerca = $request->query('chiave');
        $arrBySearch = [];

        foreach($items as $item){
            if(Str::of(Str::lower($item->name))->contains(Str::lower($chiaveDiRicerca))){
                array_push($arrBySearch, $item);
            }
        }
        return view('items.search', compact('arrBySearch','chiaveDiRicerca'));
    }



    public function indexItem()
    {
        $items = Item::where('is_accepted', true)->paginate(6);
        return view('items.index', compact('items'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function showItem(Item $item)
    {
        return view('items.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        //
    }
}
