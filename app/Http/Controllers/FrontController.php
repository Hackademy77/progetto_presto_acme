<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function welcome() {

        $items = Item::take(6)->get()->sortBy('created_at');
        return view('welcome', compact('items'));
    }
}
