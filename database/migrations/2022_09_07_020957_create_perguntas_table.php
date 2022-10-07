<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perguntas', function (Blueprint $table) {

            // define colunas
            $table->id('id');
            $table->foreignId('id_questionario');
            $table->string('pergunta');
            $table->string('resposta');
            $table->string('repostas_f');

            // referencia id_tema com id da tabela temas
            $table->foreign('id_questionario')->references('id')->on('questionarios');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perguntas');
    }
};
