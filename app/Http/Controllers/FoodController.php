<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        $foods = Food::all();
        return view('home', compact('foods'));
    }

    public function show($id)
    {
        $food = Food::findOrFail($id);
        return view('foods.show', compact('food'));
    }

    // Metode kontroler lainnya
}
