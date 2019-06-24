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
        if($request->hasFile('imagem0') && $request->file('imagem0')->isValid()){
            $pet = new Pet();
            $pet->nome = $request->input('nome');
            $pet->especie = $request->input('especie');
            $pet->genero= $request->input('genero');
            $pet->raca = $request->input('raca');
            $pet->dataNascimento = $request->input('dataNascimento');
            $pet->observacao = $request->input('observacao');
            $pet->dono_id = $request->session()->get('usuario')->id;
            
            $pet->save();

            $i = 0;
            while($request->hasFile('imagem'.$i) && $request->file('imagem'.$i)->isValid() && $i < 5){
                $arquivo = $request->file('imagem'.$i++);
                $image = new Imagem();
                $image->pet_id = $pet->id;
                $image->extencao = $arquivo->extension();
                $image->imagem = $arquivo->get();
                $image->save();
            }

            return view('/meusPets', compact('pet'));
        }else{
            echo "a primeira imagem precisa ser valida";
        }
    }

    public static function showMainImage($petId) {
        return Imagem::where('pet_id', '=', $petId)->first();
    }

    public static function getImages($petId) {
        return Imagem::where('pet_id', '=', $petId)->get();
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

    public function searchPet(Request $request){
        $pets = Pet::all();
        if($request->filled('nome')){
            $pets = $pets->intersect(Pet::where('nome','like',"%$request->nome%")->get());
        }
        if($request->filled('isDog') xor $request->filled('isCat')){
            if($request->filled('isDog')){
                $pets = $pets->intersect(Pet::where('especie','cachorro')->get());
            }else{
                $pets = $pets->intersect(Pet::where('especie','gato')->get());
            }
        }
        if($request->filled('isM') xor $request->filled('isF')){
            if($request->filled('isM')){
                $pets = $pets->intersect(Pet::where('genero','macho')->get());
            }else{
                $pets = $pets->intersect(Pet::where('genero','femea')->get());
            }
        }
        if($request->filled('raca')){
            $pets = $pets->intersect(Pet::where('raca','like',"%$request->raca%")->get());
        }
        
        return view('buscaPet',compact('pets')); 
    }
}
