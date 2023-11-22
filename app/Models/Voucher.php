<?php

namespace App\Models;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $fillable = [
        'qtd_adulto', 'qtd_crianca', 'qtd_bebe', 'data_passeio', 'valor_passeio', 'observacao', 'status', 'cliente_id', 'passeio_id'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function passeio()
    {
        return $this->belongsTo(Passeio::class);
    }
}
