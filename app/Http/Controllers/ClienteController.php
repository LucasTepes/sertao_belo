<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Models\Nacionalidade;

class ClienteController extends Controller
{

    public function create(){
        $nacionalidades = Nacionalidade::all();

        return view('cliente.create', compact('nacionalidades'));
    }

    public function edit(String $id){

        $cliente = Cliente::find($id);
        $nacionalidades = Nacionalidade::all();

        return view('cliente.edit', compact('cliente', 'nacionalidades'));
    }


    public function store(Request $request){
        $dados = $request->toArray();
        $dados['tipo'] = "cliente";
        //dd($dados);

        $newCliente = Cliente::create($dados);
        $cliente = $newCliente->toArray();
        $cliente['cliente_id'] = $newCliente->id;
        $cliente['tipo'] = "cliente";
        //dd($cliente);
        User::create($cliente);
        return redirect()->route('lobby.index');
    }

    public function list(Request $request){
        $clientes = Cliente::where('name', 'like', '%' . $request->Busca . '%')->orderBy('name', 'asc')->paginate(3);

        return view('cliente.list', compact('clientes'));
    }

    public function update(Request $request, String $id){
        $dados = $request->toArray();
        $cliente = Cliente::find($id);

        $cliente->fill($dados);
        $cliente->save();

        return redirect()->route('cliente.list');
    }

    public function destroy(String $id){
        $cliente = Cliente::find($id);
        $emailCliente = $cliente['email'];
        //dd($emailCliente);
        $user = User::where('email',$emailCliente)->first();
        //dd($user);
        $cliente->delete();
        $user->delete();

        return redirect()->route('cliente.list')->with('sucesso', 'Cliente deletado com sucesso');
    }
}
