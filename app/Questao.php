<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    protected $table = 'questoes';

    protected $fillable = [
        'questionario_id',
        'enunciado',
        'respostaA',
        'respostaB',
        'respostaC',
        'respostaD',
        'respostaE',
        'correta',

        ];

    public function questionario()
    {
        return $this->belongsTo(Questionario::class);
    }
}
