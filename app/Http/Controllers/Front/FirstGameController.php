<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class FirstGameController extends Controller
{
    public function index()
    {
        return view('front.first-game.index');
    }
}
