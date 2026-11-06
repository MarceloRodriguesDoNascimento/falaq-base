<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descricao')->nullable();
            $table->dateTime('data_evento')->nullable();
<<<<<<< HEAD
=======
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
>>>>>>> 2040cdaf2bedf48eacfc0dada965c0bb7f99f175
            $table->timestamps();
        });

        Schema::create('perguntas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('evento_id')->constrained('eventos')->onDelete('cascade');
<<<<<<< HEAD
=======
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->boolean('is_public')->default(false);
>>>>>>> 2040cdaf2bedf48eacfc0dada965c0bb7f99f175
            $table->text('texto');
            $table->string('status')->default('pendente');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('perguntas');
        Schema::dropIfExists('eventos');
    }
};
