<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $nome;
    public $marca;
    public $categoria;
    public $prc_custo;
    public $prc_venda;
    public $etq_minimo;
    public $etq_quantidade;

    public function store(){
        Produto::create([

        'nome' => $this -> nome,
        'marca' => $this -> marca,
        'categoria' => $this -> categoria,
        'prc_custo' => $this -> prc_custo,
        'prc_venda' => $this -> prc_venda,
        'etq_minimo' => $this -> etq_minimo,
        'etq_quantidade' => $this -> etq_quantidade,
        ]);

        session()->flash('succes', 'Produto cadastrado');
        return redirect()->route('produto.index');
    }

    public function render()
    {
        return view('livewire.produto.produto-create');
    }
}
