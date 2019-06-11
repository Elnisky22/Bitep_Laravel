<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use App\Models\Cidade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller {
    public function index() {
        $estados = Estado::all();
        return view('entrarCadastrar', compact('estados'));
    }

    public function loadCidades(Request $request) {
        return $cidades = Cidade::where('estado_id', '=', $request->estado_id)->get();
    }
}
