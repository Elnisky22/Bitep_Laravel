<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Pet;
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
        //
    }

    public function destroy($id) {
        Usuario::destroy($id);
        return view('logout');
    }

    public static function getCidade($id){
        return Cidade::find($id);
    }

    public static function findCidades($cidade){
        return Cidade::where('estado_id', '=', $cidade->estado_id);
    }
}
