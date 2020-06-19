<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableQuestoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questoes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('enunciado');
            $table->string('respostaA');
            $table->string('respostaB');
            $table->string('respostaC');
            $table->string('respostaD');
            $table->string('respostaE');
            $table->string('correta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questoes');
    }
}
