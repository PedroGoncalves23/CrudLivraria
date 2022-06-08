<?php

namespace App\Http\Controllers;
use App\Models\Livro;
use App\Models\Midia;
use App\Models\Editora;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreUpdateLivro;
use Illuminate\Support\Facades\Storage;

class LivroController extends Controller
{
    public function index(){
        $livros= Livro::orderBy('titulo')->paginate(5);
        return view ('livros.index', compact('livros'));
    }

    public function create(){
        $editoras = Editora::all(); //TO DO: diminuir o tamanho da consulta
        return view ('livros.create', compact('editoras'));
    }

    public function store(StoreUpdateLivro $request){
        $data= $request->all();
        
        if($request->capa->isValid()){
            $nameFile= Str::of($request->isbn)->slug('-')
            . '.'. $request->capa->getClientOriginalExtension();
            $imagem= $request->capa->storeAs('livro', $nameFile);
            $data['capa']= $imagem;
            $tmp = Editora::where('nome', '=', $request->editora_id)->get();
            if($tmp != null){
                $editora= $tmp->first();
                $data['editora_id']= $editora->id;
            }
            Livro::create($data);
            return redirect()->route('livros.index');
        }else{
            return redirect()->route('livros.index')->with('message', 'Imagem inválida!');
        }
        return redirect()->route('livros.index');
    }

    public function show($id){
        $livro= Livro::find($id);
        if(!$livro){
            return redirect()
                        ->route('livros.index')
                        ->with('message', 'Livro não foi encontrado');
        }
        $midia= $livro->midia;
        if ($midia ==null){
            $midia= new Midia();
            $midia->nome='';
            $midia->descricao='';
        }
        return view('livros.show', compact('livro', 'midia'));
    }

    public function destroy($id){
        $livro= Livro::find($id);
        if(!$livro){
            return redirect()
                        ->route('livros.index')
                        ->with('message', 'Livro não foi encontrado');
        }
        $livro->delete();
        //falta deletar a foto de capa
        return redirect()
                    ->route('livros.index')
                    ->with('message', 'Livro deletado!');
    }

    public function edit($id){
        $livro= Livro::find($id);
        if(!$livro){
            return redirect()
                        ->route('livros.index')
                        ->with('message', 'Livro não foi encontrado');
        }
        return view('livros.edit', compact('livro'));

    }

    public function update(StoreUpdateLivro $request, $id){
        $livro= Livro::find($id);
        if(!$livro){
            return redirect()->route('livros.index')->with('message', 'Livro não foi encontrado');
        }
        $data= $request->all();
        if(isset($request->capa) and $request->capa->isValid()){
            if(Storage::exists($livro->capa)){
                Storage::delete($livro->capa);
            }
            $nameFile= Str::of($request->isbn)->slug('-')
            . '.'. $request->capa->getClientOriginalExtension();
            $imagem= $request->capa->storeAs('livro', $nameFile);
            $data['capa']= $imagem;
            $livro->update($data);
            return redirect()->route('livros.index')->with('message', 'Livro editado!');
        }else{
            return redirect()->route('livros.index')->with('message', 'Arquivo de imagem inválido!');
        }
    }


    public function search(Request $request){
        $filters= $request->except('_token');
        $livros = Livro::where('titulo', 'LIKE', "%$request->search%")
                        ->orWhere('idioma', 'LIKE', "%$request->search%")
                        ->paginate();

        return view('livros.index', compact('livros', 'filters'));
    }

}
