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
        Schema::create('pessoas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cargo_id');
            $table->string('nome_completo');
            $table->enum('tipo', ['fisica', 'juridica'])->nullable();
            $table->string('celular')->nullable();
            $table->string('endereco')->nullable();
            $table->string('numero')->nullable();
            $table->string('bairro')->nullable();
            $table->date('nascimento')->nullable();
            $table->boolean('ativo')->default(true);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('cargo_id')->on('cargos')->references('id')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoas');
    }
};
