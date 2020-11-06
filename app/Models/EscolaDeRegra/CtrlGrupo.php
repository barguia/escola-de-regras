<?php

namespace App\Models\EscolaDeRegra;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EscolaDeRegra\CtrlRegra;

class CtrlGrupo extends Model
{
    use HasFactory;

    private string $nome;
    private array $regras = array();

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function addRegra(CtrlRegra $regra): void
    {
        array_push($this->regras, $regra);
    }

    public function getRegras(): array
    {
        return $this->regras;
    }


}
