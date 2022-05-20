<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function index() {
        $produtos = Produto::all();
        return view('produtos/index',[
            'prods' => $produtos,
        ]);
    }


    public function criar() {
        return view('produtos.criar');
    }

    public function inserir(Request $dados) {
        $valida = $dados->validate([
            'nome' =>'required',
            'descricao'=>'required',
            'preco'=>'required'
        ]);
        $produto = new Produto();   
        
        $produto->nome = $dados->nome;
        $produto->descricao = $dados->descricao;
        $produto->preco = $dados->preco;

        $produto->save();

        return redirect()->route('produto');

    }


    public function ver(Produto $prod) {
        // $produto = Produto::find($id);
        // return $prod;
        return view('produtos/ver',[
            'prod' => $prod,
        ]);
    }

}
