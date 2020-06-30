<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionario extends Model
{
    protected $fillable = [
        'nome',
        'pontuacao',
        'user_id'
    ];

    public function questao()
    {
        return $this->hasMany(Questao::class);
    }

    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
