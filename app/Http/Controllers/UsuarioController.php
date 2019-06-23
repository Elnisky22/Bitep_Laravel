<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Usuario;
use App\Models\Pet;
use App\Models\Estado;
use App\Models\Cidade;
use Illuminate\Http\Request;

class UsuarioController extends Controller {
    public function index() {
        $pets = Pet::all();
        return view('home')->with('pets', $pets);
    }

    public function create() {
        //
    }

    public function store(Request $request) {
        //
    }

    public static function show($id) {
        return Usuario::find($id);
    }

    public function edit($id) {
        //
    }

    public function update(Request $request, $id) {
        $usuario = Usuario::find($id);
        $usuario->nome = $request->input('nome');
        $usuario->email = $request->input('email');
        $usuario->telefone = $request->input('telefone');
        $usuario->cidade_id = $request->input('cidade');
        $usuario->save();
        
        Session::put('usuario', $usuario);
        return redirect()->route('meuPerfil', compact('usuario'));
    }

    public function destroy($id) {
        Usuario::destroy($id);
        return view('logout');
    }

    public static function getCidade($id) {
        return Cidade::find($id);
    }

    public static function getEstadoId($id) {
        return Cidade::find($id)->estado_id;
    }

    public static function getEstados() {
        return Estado::all();
    }

    public static function loadCidades($id) {
        return $cidades = Cidade::where('estado_id', '=', $id)->get();
    }
}
