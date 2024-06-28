<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function store(Request $request)
    {
        $order = new Order;
        $order->food_id = $request->food_id;
        $order->user_name = $request->user_name;
        $order->quantity = $request->quantity;
        $order->save();

        return redirect('/orders');
    }

    // Metode kontroler lainnya
}
