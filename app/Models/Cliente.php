<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'email','password','name','data_nasci','cpf','rg','cidade','estado','telefone','nacionalidade_id'
    ];

    public function nacionalidade(){
        return $this->belongsTo(Nacionalidade::class);
    }
}
