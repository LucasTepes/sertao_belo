<?php

namespace App\Http\Controllers;

use App\Models\Passeio;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class PasseioController extends Controller
{
    public function index(){

        return view('passeio.index');
    }

    public function store(Request $request){
        $dados = $request->toArray();
        //dd($dados);

        if($request->hasFile('img')){
            $dados['img'] = $this->uploadFoto($request->img);
        }

        //dd($dados);

        Passeio::create($dados);

        return redirect()->route('lobby.index');
    }


    private function uploadFoto($foto)
    {
        $nomeArquivo = $foto->hashName();

        // Redimensionar foto
        $imagem = Image::make($foto)->fit(420, 200);

        //Salvar arquivo da foto
        Storage::put('public/passeios/'.$nomeArquivo, $imagem->encode());


        return $nomeArquivo;
    }
}
