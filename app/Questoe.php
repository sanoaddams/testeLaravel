<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questoe extends Model
{


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
}
