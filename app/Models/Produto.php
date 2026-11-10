<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'marca',
        'categoria',
        'unidade_medida',
        'preco_custo',
        'preco_venda',
        'quantidade',
        'estoque_minimo'
    ];
}
