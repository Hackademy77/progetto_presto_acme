<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function index() {
        $item_to_check = Item::where('is_accepted', null)->first();
        return view('revisors.index', compact('item_to_check'));
    }
    
    public function acceptItem(Item $item) {
        $item->setAccepted(true);
        return redirect()->back()->with('message', 'Complimenti, hai approvato l\'annuncio');
        
    }
    
    public function rejectItem(Item $item) {
        $item->setAccepted(false);
        return redirect()->back()->with('message', 'Complimenti, hai rifiutato l\'annuncio');
        
    }
}
