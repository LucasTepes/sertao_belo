<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passeio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome','descricao','hora_inicio','hora_fim','img','valor_crianca','valor_adulto','valor_bebe','status','cidade','uf'
    ];


}
