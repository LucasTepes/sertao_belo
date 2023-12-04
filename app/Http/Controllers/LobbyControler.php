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

    public function catamara(){

        $passeios = Passeio::where('status','=','on')->where('tipo','=','catamara')->get();
        //dd($passeios);

        return view('lobby.catamara', compact('passeios'));
    }

    public function passeio(){

        $passeios = Passeio::where('status','=','on')->where('tipo','=','passeio')->get();
        //dd($passeios);

        return view('lobby.passeio', compact('passeios'));
    }

    public function lanchasVoadeiras(){

        $passeios = Passeio::where('status','=','on')->where('tipo','=','lancha')->get();
        //dd($passeios);

        return view('lobby.passeio', compact('passeios'));
    }

    public function tecnica(){

        $passeios = Passeio::where('status','=','on')->where('tipo','=','visitaTecnica')->get();
        //dd($passeios);

        return view('lobby.passeio', compact('passeios'));
    }

    public function ecoturismo(){

        $passeios = Passeio::where('status','=','on')->where('tipo','=','ecoturismo')->get();
        //dd($passeios);

        return view('lobby.ecoturismo', compact('passeios'));
    }

    public function pedagocica(){

        $passeios = Passeio::where('status','=','on')->where('tipo','=','pedagogico')->get();
        //dd($passeios);

        return view('lobby.pedagogica', compact('passeios'));
    }

    public function mergulho(){

        $passeios = Passeio::where('status','=','on')->where('tipo','=','mergulho')->get();
        //dd($passeios);

        return view('lobby.mergulho', compact('passeios'));
    }
}
