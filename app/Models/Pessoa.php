<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pessoa extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nome_completo',
        'cargo_id',
        'tipo',
        'celular',
        'endereco',
        'nascimento',
        'ativo'
    ];

    public function cargo(): BelongsTo
    {
        return $this->belongsTo(Cargo::class);
    }
}
