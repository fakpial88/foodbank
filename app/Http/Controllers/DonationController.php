<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function create()
    {
        return view('donate');
    }

    public function store(Request $request)
    {
        $donation = new Donation;
        $donation->name = $request->name;
        $donation->food_item = $request->food_item;
        $donation->quantity = $request->quantity;
        $donation->save();

        return redirect('/')->with('success', 'Donasi berhasil didaftarkan!');
    }
}
