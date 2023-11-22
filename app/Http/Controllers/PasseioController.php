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

    public function edit(String $id){
        $passeio = Passeio::find($id);
        //dd($passeio);
        return view('passeio.edit', compact('passeio'));
    }

    public function update(Request $request, String $id){
        $dados = $request->toarray();

        $passeio = Passeio::find($id);

        if ($request->hasFile('img')) {
            Storage::delete('public/passeios/' . $passeio['img']);
            $dados['img'] = $this->uploadFoto($request->img);
        }

        //dd($dados);

        $passeio->fill($dados);
        $passeio->save();

        return redirect()->route('lobby.index');
    }
}
