<?php

namespace App\Http\Controllers;

use App\Models\Passeio;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function create(String $id){
        $passeio = Passeio::find($id);
        //dd($passeio);

        return view('voucher.create', compact('passeio'));
    }
}
