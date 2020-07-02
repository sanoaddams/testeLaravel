<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Questao;
use Illuminate\Http\Request;
use App\Questionario;

class ResponderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('responder.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Questionario $responder)
    {
        return view('responder.index')->withQuestionario($responder);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function resposta(Request $request,$id)
    {        
        
       
        $questionario = Questionario::find($id);
        $pontuacao = $questionario ->pontuacao;
       
        $num = 0;
      
        $valorQuestao = 4.5;
        $nota = 0;
        
        for($i=0;$i < $request['num'];$i++)
        {
             
            
            $questao = $request['questao'.$num];
            
            $correta = $request['correta'.$num];
            if($questao == $correta)
            {
                $nota = $nota + $valorQuestao;
            }else{
                $nota -=$valorQuestao;
            }
        }

   

        
        if($nota >= $pontuacao)
        {
            return redirect()->back()->with('Aprovado','Parabens,você atingiu a pontuação nescessaria');
          
        }
        else
        {
            return redirect()->back()->with('Reprovado','Parabens,você atingiu a pontuação nescessaria');
          
        }

    }
}
