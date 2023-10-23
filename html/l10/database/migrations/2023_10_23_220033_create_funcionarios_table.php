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
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('nome')->nullable();
            $table->dateTime('data_nascimento')->nullable();
            $table->boolean('ativo')->default(true);
            $table->unsignedBigInteger('id_cargo')->nullable();
            $table->timestamps();

             // Adicione as chaves estrangeiras
             $table->foreign('id_cargo')
             ->references('id')
             ->on('cargos')
             ->onDelete('NO ACTION')
             ->onUpdate('NO ACTION');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funcionarios');
    }
};
