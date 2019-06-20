<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

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
        //dd($request->session()->get('usuario')->id);

        //$dono = $request->session()->get();
        $dono = $request->session()->get('usuario')->id;
        $pet = new Pet();
        $pet->nome = $request->input('nome');
        $pet->especie = $request->input('especie');
        $pet->genero= $request->input('genero');
        $pet->raca = $request->input('raca');
        $pet->dataNascimento = $request->input('dataNascimento');
        $pet->observacao = $request->input('observacao');
        $pet->dono_id = $dono; //$request->$dono; //->puck('id');     //cadastrar o id do usuario.
        
        $pet->save();

        return view('/meusPets',compact('pet'));
    }

    public function show($id) {
        $pet = Pet::find($id);
        return view('pet', compact('pet'));
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
        /*
        if($request->input('in') == "excluir"){
            $pet->destroy();
        }else{
            echo "FALHA NA EXCLUSAO DO PET";
        }*/
    }
}
