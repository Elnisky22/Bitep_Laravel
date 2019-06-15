<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use App\Models\Cidade;
use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller {
    public function index() {
        $estados = Estado::all();
        return view('entrarCadastrar', compact('estados'));
    }

    public function store(Request $request) {
        if ($request->input('in') == "sginup") {
            $usuario = new Usuario();
            $usuario->nome = $request->input('nome');
            $usuario->email = $request->input('email');
            $usuario->telefone = $request->input('telefone');
            $usuario->cidade_id = $request->input('cidade');
            $usuario->senha = $request->input('senha');
            $usuario->save();
        } else {
            $usuario = Usuario::where('email', '=', $request->input('email'))->first();
        }
        return view('/meuPerfil', compact('usuario'));
    }

    public function loadCidades(Request $request) {
        return $cidades = Cidade::where('estado_id', '=', $request->estado_id)->get();
    }
}
