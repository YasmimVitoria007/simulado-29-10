<?php

namespace App\Livewire\Movimentacao;

use App\Models\Movimentacao;
use Livewire\Component;

class MovimentacaoIndex extends Component
{
    public function render()
    {
        return view('livewire.movimentacao.movimentacao-index', Movimentacao::all());
    }
}
