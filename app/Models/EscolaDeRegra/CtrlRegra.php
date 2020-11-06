<?php

namespace App\Models\EscolaDeRegra;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CtrlRegra extends Model
{
    use HasFactory;

    private string $titulo;

    public function __construct(string $titulo)
    {
        $this->titulo = $titulo;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }
}
