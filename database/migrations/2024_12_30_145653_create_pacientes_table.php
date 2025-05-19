<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf', length: 11)->uniq();
            $table->date('nascimento');
            $table->enum('genero', ['m', 'f', 'o']);
            $table->string('filiacao_mae')->nullable();
            $table->string('filiacao_pai')->nullable();
            $table->string('responsavel')->nullable();
            $table->string('endereco');
            $table->string('complemento')->nullable();
            $table->string('bairro');
            $table->string('cidade');
            $table->string('cep', length: 8);
            $table->string('uf', length: 2);
            $table->string('telefone', length: 11);
            $table->string('email')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
