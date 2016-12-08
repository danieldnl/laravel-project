<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use App\Card;

class CardsController extends Controller
{
    public function index()
    {
        //$cards = DB::table('cards')->get();
        $cards = Card::all();

        return View('cards.index', compact('cards'));
    }

    public function show(Card $card)
    {
        //$card = Card::find($id);
        $card->load('notes.user');

        return View('cards.show', compact('card'));
    }
}
