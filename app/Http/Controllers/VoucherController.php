<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Passeio;
use App\Models\Voucher;
use Illuminate\Http\Request;

class VoucherController extends Controller
{

    public function create(String $id)
    {
        $passeio = Passeio::find($id);
        //dd($passeio);

        if (auth()->check()) {
            return view('voucher.create', compact('passeio'));
        }else{
            return redirect()->back()->with('login_erro', 'Por gentileza, faça o login antes de agendar algum passeio');
        }
    }

    public function store(Request $request){
        $dadosVaucher = $request->toArray();
        $dadosVaucher['status'] = 'aberto';

        $userId = auth()->user()->id;
        $usuario = User::find($userId);

        $cliente = $usuario->cliente()->first();
        $clienteId = $cliente ? $cliente->id : null;
        //dd($clienteId);
        $dadosVaucher['cliente_id'] = $clienteId;
        //dd($dadosVaucher);

        Voucher::create($dadosVaucher);

        return redirect()->route("lobby.index")->with('sucesso', "Passeio Agendado com sucesso, para mais infos, vá na aba de Vouchers");

    }
}
