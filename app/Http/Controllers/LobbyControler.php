<?php

namespace App\Http\Controllers;

use App\Models\Passeio;
use Illuminate\Http\Request;

class LobbyControler extends Controller
{
    public function index(){

        $passeios = Passeio::all()->where('status','on');
        //dd($passeios);
        return view('lobby.index', compact('passeios'));
    }
}
