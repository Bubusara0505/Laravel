<?php

namespace App\Http\Controllers;
use App\Models\Cards;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    public function store(Request $request){
        $validated = $request->validate([
        'Title' => 'required|string}max:255',
        'Desc' => 'required|string',
    ]);

    Card::create([
        'Title' => $validated['Title'],
        'Desc' => $validated['Desc'],
    ]);

    return redirect()->back()->with('success', 'Card addes successfull!');
    }

    public function index(){
    $cards = Cards::all();
    return view('cards.index', compact('cards'));
}

}
