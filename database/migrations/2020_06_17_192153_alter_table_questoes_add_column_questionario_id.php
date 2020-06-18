<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableQuestoesAddColumnQuestionarioId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('questoes', function (Blueprint $table) {
            
            $table->unsignedBigInteger('questionario_id')->after('id');
            $table->foreign('questionario_id')->references('id')->on('questionarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('questoes', function (Blueprint $table) {
            $table->dropForeign('questoes_questionario_id_foreign');
            $table->dropColumn('questinario_id');
        });
    }
}
