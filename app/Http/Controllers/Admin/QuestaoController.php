<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Questao;
use App\Questionario;
use Illuminate\Http\Request;

class QuestaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd(Questao::all());
               
        return view('questao.index')->withQuestao(Questao::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $questionarios = Questionario::all();

        return view('questao.create',compact('questionarios'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Questao::create($data);

        flash('Questão cadastrada com sucesso!')->success();

        return redirect()->route('questoes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Questao::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $questoes = Questao::findOrFail($id);
        return view('questao.edit')->withQuestoes($questoes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $questoes = Questao::findOrFail($id);
        $questoes->update($data);
        flash('Questão atualizada com sucesso!')->success();
        return redirect()->route('questoes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $questoes = Questao::findOrFail($id);
        $questoes->delete();
        flash('Questão excluída com sucesso!')->success();
        return redirect()->route('questoes.index');
    }
}
