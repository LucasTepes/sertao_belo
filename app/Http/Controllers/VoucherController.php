<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Passeio;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class VoucherController extends Controller
{

    public function create(String $id)
    {
        $passeio = Passeio::find($id);
        //dd($passeio);

        if (auth()->check()) {
            return view('voucher.create', compact('passeio'));
        } else {
            return redirect()->back()->with('login_erro', 'Por gentileza, faça o login antes de agendar algum passeio');
        }
    }

    public function store(Request $request)
    {
        $dadosVaucher = $request->toArray();
        $dadosVaucher['status'] = 'aberto';
        //dd($dadosVaucher);
        $passeioVaucher = Voucher::where([
            ['passeio_id', '=', $dadosVaucher['passeio_id']],
            ['data_passeio', '=', $dadosVaucher['data_passeio']]
        ])->get();
        //dd($passeioVaucher);

        if ($passeioVaucher->count() > 0) {
            return redirect()->back()->with('erro', 'Você já possui um Voucher desse passeio nesta data');
        } elseif (auth()->user()->tipo == 'admin'){
            return redirect()->back()->with('erro', 'Logue como Cliente para cadastrar um Voucher');
        } else {
            $userId = auth()->user()->id;
            $usuario = User::find($userId);

            $cliente = $usuario->cliente()->first();
            $clienteId = $cliente ? $cliente->id : null;
            //dd($clienteId);
            $dadosVaucher['cliente_id'] = $clienteId;
            //dd($dadosVaucher);

            Voucher::create($dadosVaucher)->paginate(3);

            $whatsappUrl = "https://wa.me/75981640778?text=Olá,%20Acabei%20de%20criar%20um%20voucher%20novo";
            return redirect()->route("lobby.index")->with(['whatsappUrl' => $whatsappUrl],['sucesso', "Passeio Agendado com sucesso, para mais infos, vá na aba de Vouchers"]);
        }
    }

    public function list(Request $request, String $id)
    {
        $user = User::find($id);
        //dd($user);

        if ($user->tipo == 'cliente') {
            $cliente = $user->cliente_id;
            //dd($cliente);
            $vouchers = Voucher::where('cliente_id', $cliente)->orderBy('id','asc')->paginate(3);
            //dd($vouchers);
            return view('voucher.list', compact('vouchers'));
        } elseif ($user->tipo == 'admin') {
            $vouchers = Voucher::where('id', 'like', '%' . $request->Busca . '%')->orderBy('id', 'asc')->paginate(3);
            //dd($vouchers);
            return view('voucher.list', compact('vouchers'));
        }



        return view('voucher.list', compact('vouchers'));
    }


    public function destroy(String $id)
    {
        $voucher = Voucher::find($id);
        //dd($voucher);
        $voucher->delete();

        return redirect()->back()->with('sucesso', 'Voucher cancelado com sucesso');
    }

    public function edit(String $id)
    {
        $voucher = Voucher::find($id);

        return view('voucher.edit', compact('voucher'));
    }

    public function update(Request $request, String $id)
    {
        $voucher = Voucher::find($id);
        $dados = $request->toArray();
        //dd($voucher);

        $voucher->fill($dados);
        $voucher->save();

        $logado = auth()->user()->id;
        $user = User::find($logado);
        $userId = $user->id;
        //dd($user);
        //dd($userId);

        $cliente = $user->cliente_id;
        //dd($cliente);

        $vouchers = Voucher::all()->where('cliente_id', $cliente);
        //dd($vouchers);

        if ($user->tipo == 'cliente') {
            $cliente = $user->cliente_id;
            //dd($cliente);
            $vouchers = Voucher::all()->where('cliente_id', $cliente);
            //dd($vouchers);
            return view('voucher.list', compact('userId', 'vouchers'))->with('sucesso', 'Voucher alterado com sucesso');;
        } elseif ($user->tipo == 'admin') {
            $vouchers = Voucher::all();
            //dd($vouchers);
            return view('voucher.list', compact('userId', 'vouchers'))->with('sucesso', 'Voucher alterado com sucesso');;
        }

        //return view('voucher.list', compact('userId', 'vouchers'))->with('sucesso', 'Voucher alterado com sucesso');
    }
}
