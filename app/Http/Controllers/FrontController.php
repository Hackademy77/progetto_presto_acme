<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function welcome() {

        $items = Item::where('is_accepted', true)->take(6)->get()->sortByDesc('created_at');
        return view('welcome', compact('items'));
    }

    public function categoryShow(Category $category) {

        return view('categoryShow', compact('category'));
    }
}
