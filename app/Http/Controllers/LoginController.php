<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller {
    public function index() {
        $estados = DB::select('SELECT * FROM estados;');
        $cidades = DB::select('SELECT * FROM cidades WHERE estado_id = 1;');
        return view('entrarCadastrar', compact('estados', 'cidades'));
    }
}
