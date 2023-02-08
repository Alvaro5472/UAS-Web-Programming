<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Order::all();
        $totalPrice = 0;
        foreach($carts as $items){
            $totalPrice += $items->price;
        }
        return view('cart', compact('carts', 'totalPrice'));
    }

    public function addToCart(Request $request)
    {
        // dd($details);
        Order::create([
            'account_id' => Auth::user()->id,
            'item_id' => $request->input('item_id'),
            'price' => $request->input('price')
        ]);
        return redirect(route('home'));
    }

    public function deleteCart(Order $order)
    {
        $order->delete();
        return redirect(route('cart'));
    }

    public function checkout(){
        $order = Order::where('account_id', Auth::user()->id)->get();
        foreach($order as $items){
            $items->delete();
        }
        return redirect(route('success'));
    }

    public function success(){
        return view('success');
    }
}
