<?php

namespace App\Livewire\Movimentacao;

use App\Models\Movimentacao;
use Livewire\Component;

class MovimentacaoCreate extends Component
{
    public $id_produto;
    public $saida;
    public $entrada;
    public $quantidade;
    public $data;

     public function store(){
        Movimentacao::create([

        'id_produto' => $this -> id_produto,
        'saida' => $this -> saida,
        'entrada' => $this -> entrada,
        'quantidade' => $this -> quantidade,
      
        ]);

        session()->flash('succes', 'Movimentação realizada com sucesso');
        $this->redirectRoute('movimentacao.index');
    }
   
    public function render()
    {
        return view('livewire.movimentacao.movimentacao-create');
    }
}
