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
        //dd($request);

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

    public static function showMainImage($petId) {
        return Imagem::where('pet_id','=',$petId)->first();
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
            //dd($request);    

            //SE A PESQUISA FOR VAZIA, ELE GERA UM ERRO!

            if(request('nome')){
                $pets = Pet::all()->where('nome',$request->nome);
            }
            
            if(request('isDog') == 'on'){
                
                $pets = Pet::all()->where('especie','cachorro');
            }

            if(request('isCat') == 'on'){                
                $pets = Pet::all()->where('especie','gato');
            }

            if(request('isM') == 'on'){
                $pets = Pet::all()->where('genero','macho');
            }

            if(request('isF') == 'on'){
                $pets = Pet::all()->where('genero','femea');
            }
            
            if(request('raca')){
                $pets = Pet::all()->where('raca',$request->raca);
            }
            
        
           /* 
            
            ->when($request->input('especie'),function($query){
                $query->where('especie',$request->input('especie'));
            })
            ->when($request->input('genero'),function($query){
                $query->where('genero',$request->input('genero'));
            })
            ->when($request->input('raca'),function($query){
                $query->where('raca',$request->input('raca'));            
            })->get();
            */


            return view('buscaPet',compact('pets')); 
    }
}