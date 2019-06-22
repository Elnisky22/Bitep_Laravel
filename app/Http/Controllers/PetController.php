<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\Imagem;

class PetController extends Controller {
    public function index() {
        /*
        $pet = Pet::all();
        return view('cadastrarPet',compact('pets'));
        */
    }

    public function create() {
        
    }

    public function store(Request $request) {
        $pet = new Pet();
        $pet->nome = $request->input('nome');
        $pet->especie = $request->input('especie');
        $pet->genero= $request->input('genero');
        $pet->raca = $request->input('raca');
        $pet->dataNascimento = $request->input('dataNascimento');
        $pet->observacao = $request->input('observacao');
        $pet->dono_id = $request->session()->get('usuario')->id;
        
        $pet->save();

        
        if($request->hasFile('imagem') && $request->file('imagem')->isValid()){
            $image = new Imagem();
            $image->pet_id = $pet->id;
            $image->extencao = $request->imagem->extension();
            $image->imagem = $request->imagem->get();
            $image->save();
        }

        return view('/meusPets', compact('pet'));
    }

    public function show($id) {
        $pet = Pet::find($id);
        return view('pet', compact('pet'));
    }

    public static function showPets($id) {
        return Pet::where('dono_id', '=', $id)->get();
    }

    public function edit($id) {
        //
    }

    public function update(Request $request, $id) {
        /*
        if($request->input('in') == "editarPet"){
            $pet->nome = $request->input('nome');
            $pet->raca = $request->input('raca');
            $pet->idade = $request->input('idade');
            $pet->especie = $request->input('especie');
            $pet->genero = $request->input('genero');
            $pet->save();
        }else{
            echo "FALHA NO UPDATE DO PET";
        }*/
    }

    public function destroy($id) {
        Pet::destroy($id);
        return view('meusPets');
    }
}
