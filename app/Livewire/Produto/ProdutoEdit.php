<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoEdit extends Component
{

    public $nome;
    public $marca;
    public $categoria;
    public $prc_custo;
    public $prc_venda;
    public $qtd_disponivel;
    public $etq_minimo;
    public $etq_quantidade;
    public $id_produto;

    public function mount($id){
        $produto = Produto::find($id);

        if($produto == null){
            session()->flash('error', 'Produto não encontrado');
            return redirect()->route('produto.index');

        }

        $this -> nome = $produto -> nome;
        $this -> marca = $produto -> marca;
        $this -> categoria = $produto -> categoria;
        $this -> prc_custo = $produto -> prc_custo;
        $this -> prc_venda = $produto -> prc_venda;
        $this -> etq_minimo = $produto -> etq_minimo;
        $this -> etq_quantidade = $produto -> etq_quantidade;
        $this -> id_produto = $produto -> id;
    }

    public function update(){
        $produto = Produto::find($this->id_produto);

        $produto -> nome = $this-> nome;
        $produto -> marca = $this -> marca;
        $produto -> categoria = $this -> categoria;
        $produto -> prc_custo = $this -> prc_custo;
        $produto -> prc_venda = $this -> prc_venda;
        $produto -> etq_minimo = $this -> etq_minimo;
        $produto -> etq_quantidade = $this -> etq_quantidade;

        $produto -> save();

         session()->flash('succes', 'Produto atualizado');
         return redirect()->route('produto.index');
    }



    public function render()
    {
        return view('livewire.produto.produto-edit');
    }
}
