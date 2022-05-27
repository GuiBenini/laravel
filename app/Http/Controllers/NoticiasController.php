<?php

namespace App\Http\Controllers;

use App\Models\Noticias;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{

    public function index() {
        $noticias = Noticias::all();
        return view('noticia/index',[
            'nots' => $noticias,
        ]);
    }


    public function criar() {
        return view('noticia.criar');
    }

    public function inserir(Request $dados) {
        $valida = $dados->validate([
            'nome' =>'required',
            'descricao'=>'required',
            'data'=>'required'
        ]);

        Noticias::create($valida);
        return redirect()->route('noticia');

    }
    public function ver(Noticias $noticias) {
        // $produto = Produto::find($id);
        // return $prod;
        return view('notica/ver',[
            'not' => $noticias,
        ]);
    }
}
