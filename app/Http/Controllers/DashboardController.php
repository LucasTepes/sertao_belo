<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Passeio;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $voucher = Voucher::where('status', 'aprovado')->count();
        $clientes = Cliente::all()->count();

        $passeios = Passeio::all();

        $qtdPasseioVendido = DB::table('vouchers')
            ->join('passeios', 'passeios.id', '=', 'vouchers.passeio_id')
            ->select(DB::raw('count(passeios.nome) as quantidade'))
            ->where('vouchers.status', '=', 'aprovado')
            ->groupBy('passeios.nome');
        //dd($qtdPasseioVendido);
        return view('dashboard.index', compact('voucher', 'clientes', 'passeios', 'qtdPasseioVendido'));
    }
}
