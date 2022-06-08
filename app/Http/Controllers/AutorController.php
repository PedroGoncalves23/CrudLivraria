<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateAutor;


use Illuminate\Http\Request;
use App\Models\Autor;

class AutorController extends Controller
{
    public function index()
    {
        $autors = Autor::all();
        return view('autor.index', compact('autors'));
    }

    public function create()
    {
        return view('autor.create');
    }

    public function store(StoreUpdateAutor $request)
    {
        Autor::create($request->all());
        return redirect()->route('autor.index');
    }

    public function show($id)
    {
        $autor = Autor::find($id);
        if (!$autor) {
            return redirect()
                ->route('autor.index')
                ->with('message', 'Autor não foi encontrado');
        }
        return view('autor.show', compact('autor'));
    }

    public function destroy($id)
    {
        $autor = Autor::find($id);
        if (!$autor) {
            return redirect()
                ->route('autor.index')
                ->with('message', 'Autor não foi encontrado');
        }
        $autor->delete();
        return redirect()
            ->route('autor.index')
            ->with('message', 'Autor não foi encontrado');
    }


    public function edit($id)
    {
        $autor = Autor::find($id);
        if (!$autor) {
            return redirect()
                ->route('autor.index')
                ->with('message', 'Autor não foi encontrado');
        }
        return view('autor.edit', compact('autor'));
    }

    public function update(StoreUpdateAutor $request, $id)
    {
        $autor = Autor::find($id);
        if (!$autor) {
            return redirect()
                ->route('autor.index')
                ->with('message', 'Autor não foi encontrado');
        }
        $autor->update($request->all());

        return redirect()
            ->route('autor.index')
            ->with('message', 'Autor editado!');
    }
}
