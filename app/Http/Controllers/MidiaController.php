<?php

namespace App\Http\Controllers;
use App\Models\Midia;
use Illuminate\Http\Request;


class MidiaController extends Controller
{

    public function index()
    {
        $midia = Midia::first();
        return view('midias.index',compact('midia'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
