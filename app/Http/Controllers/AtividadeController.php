<?php

namespace App\Http\Controllers;

use App\Models\Atividade;
use Illuminate\Http\Request;

class AtividadeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listaAtividades = Atividade::all();
        return view('atividade.list',["atividades" => $listaAtividades]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $umaAtividade = Atividade::find($id);
        return view('atividade.show',["atividade" => $umaAtividade]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Atividade $atividade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Atividade $atividade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Atividade $atividade)
    {
        //
    }
}
