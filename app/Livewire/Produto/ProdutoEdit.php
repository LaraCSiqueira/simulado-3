<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoEdit extends Component
{

    public $produto_id;
    public $nome;
    public $descricao;
    public $marca;
    public $categoria;
    public $unidade_medida;
    public $preco_custo;
    public $preco_venda;
    public $quantidade;
    public $estoque_minimo;


    public function mount($id){
        $produto = Produto::find($id);

        if ($produto == null){
            session()->flash('Error', 'Não encontrado');
            return redirect()->route('produto-index');
        }

        $this->produto_id = $produto -> id;
        $this->nome = $produto -> nome;
        $this->descricao = $produto -> descricao;
        $this->marca = $produto -> marca;
        $this->categoria = $produto -> categoria;
        $this->unidade_medida = $produto -> unidade_medida;
        $this->preco_custo = $produto -> preco_custo;
        $this->preco_venda = $produto -> preco_venda;
        $this->quantidade = $produto -> quantidade;
        $this->estoque_minimo = $produto -> estoque_minimo;
        
    }

    public function update(){
        $produto = Produto::find();

        if ($produto == null){
            session()->flash('Error', 'Não encontrado');
            return redirect()->route('produto-index');
        }
    }


    public function render()
    {
        return view('livewire.produto.produto-edit');
    }
}
