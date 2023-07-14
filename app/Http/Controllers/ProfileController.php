<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile() {
        $item_to_check = Item::where('is_accepted', null)->get();
        // dd(gettype($item_to_check));
        return view ('user.profile', compact('item_to_check'));
        
    }
    // public function acceptItem(Item $item_to_check) {
    //     $item_to_check->setAccepted(true);
    //     return redirect()->back()->with('message', 'Complimenti, hai approvato l\'annuncio');
        
    // }
    
    // public function rejectItem(Item $item_to_check) {
    //     $item_to_check->setAccepted(false);
    //     return redirect()->back()->with('message', 'Complimenti, hai rifiutato l\'annuncio');
        
    // }
}