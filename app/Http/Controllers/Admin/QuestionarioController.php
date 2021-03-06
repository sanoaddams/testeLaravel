<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Questionario;
use App\User;

class QuestionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('questionarios.index')->withQuestionario(Questionario::paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questionarios.create');
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

        $user = Auth::user();
        
        //Questionario::create($data);

        $questionario = $user->questionarios()->create($data);

        flash('Questionário cadastrado com sucesso!')->success();

        return redirect()->route('questionarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd(Questionario::findOrFail($id));
        $questionario = Questionario::findOrFail($id);
        
        $data = $questionario->questao;

        return view('questionarios.show')->withQuestionario($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $questionario = Questionario::findOrFail($id);

        return view('questionarios.edit')->withQuestionario($questionario);
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
       
       $questionario = Questionario::findOrFail($id);

       $questionario->update($data);
       
       flash('Questionário atualizado com sucesso!')->success();

       return redirect()->route('questionarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $questionario = Questionario::findOrFail($id);

        $questionario->delete();

        flash('Questionário excluído com sucesso!')->success();

        return redirect()->route('questionarios.index');
    }
}
