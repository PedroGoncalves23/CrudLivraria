<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateEditoras;
use Illuminate\Http\Request;
use App\Models\Editora;


class EditoraController extends Controller
{
    public function index(){
        $editoras = Editora::all();
        return view ('editoras.index', compact('editoras'));
    }

    public function create(){
        return view('editoras.create');
    }

    public function store(StoreUpdateEditoras $request){
        Editora::create($request->all());
        return redirect()->route('editoras.index');
    }

    public function show($id){
        $editoras = Editora::find($id);
        if(!$editoras){
            return redirect()
                            ->route('editoras.index')
                            ->with('message', 'Editora não encontrada');
        }
        return view('editoras.show', compact('editoras'));
    }

    public function destroy($id){
        $editoras = Editora::find($id);
        if(!$editoras){
            return redirect()
                            ->route('editoras.index')
                            ->with('message', 'Editora não encontrada');
        }
        $editoras->delete();
        return redirect()
                            ->route('editoras.index')
                            ->with('message', 'Editora não encontrada');
        
    }

    public function edit($id){
        $editoras = Editora::find($id);
        if(!$editoras){
            return redirect()
                            ->route('editoras.index')
                            ->with('message', 'Editora não encontrada');
        }
        return view('editoras.edit', compact('editoras'));
    }

    public function update(StoreUpdateEditoras $request, $id){
        $editoras = Editora::find($id);
        if(!$editoras){
            return redirect()
                            ->route('editoras.index')
                            ->with('message', 'Editora não encontrada');
        }
        $editoras->update($request->all());

        return redirect()
                        ->route('editoras.index')
                        ->with('message', 'Editora editada');
    }
}
