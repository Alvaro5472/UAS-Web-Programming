<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function home(){
        $items = Item::paginate(10);
        return view('home', compact('items'));
    }

    public function details($items){
        $details = Item::where('id', $items)->first();
        return view('detail', compact('details'));
    }
}
