<?php

namespace App\Http\Controllers;

use App\Models\Atividade;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

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
        return view('atividade.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //faço as validações dos campos

        //vetor com as mensagens de erro
        $messages = array(
            'title.required' => 'É obrigatório um título para a atividade',
            'description.required' => 'É obrigatória uma descrição para a atividade',
            'scheduledto.required' => 'É obrigatório o cadastro da data/hora da atividade',
        );

        //vetor com as especificações de validações
        $regras = array(
            'title' => 'required|string|max:255',
            'description' => 'required',
            'scheduledto' => 'required|string',
        );

        //cria o objeto com as regras de validação
        $validador = Validator::make($request->all(), $regras, $messages);

        //executa as validações
        if ($validador->fails()) {
            return redirect("atividade/create")
            ->withErrors($validador)
            ->withInput($request->all);
        }

        //se passou pelas validações, processa e salva no banco...
        $obj_Atividade = new Atividade();
        $obj_Atividade->title =       $request['title'];
        $obj_Atividade->description = $request['description'];
        $obj_Atividade->scheduledto = $request['scheduledto'];
        $obj_Atividade->save();

        return redirect('/atividades')->with('success', 'Atividade criada com sucesso!!');
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
