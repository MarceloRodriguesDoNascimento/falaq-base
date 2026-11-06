@extends('layouts.app')

<<<<<<< HEAD
@section('title', 'Criar evento — FalaQ')

@section('content')
<main class="mx-auto max-w-2xl rounded-lg bg-white p-6 text-gray-900 shadow-md">
    <h1 class="mb-6 text-2xl font-bold">Criar evento</h1>

    <form action="{{ route('eventos.store') }}" method="POST" class="space-y-5">
        @csrf

        <div>
            <label for="titulo" class="mb-2 block text-sm font-medium text-gray-700">Título</label>
            <input
                type="text"
                id="titulo"
                name="titulo"
                value="{{ old('titulo') }}"
                class="w-full rounded-md border px-3 py-2 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200 @error('titulo') border-red-500 @else border-gray-300 @enderror"
                @error('titulo') aria-invalid="true" aria-describedby="titulo-error" @enderror
            >
            @error('titulo')
                <p id="titulo-error" class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="descricao" class="mb-2 block text-sm font-medium text-gray-700">Descrição</label>
            <textarea
                id="descricao"
                name="descricao"
                rows="5"
                class="w-full rounded-md border px-3 py-2 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200 @error('descricao') border-red-500 @else border-gray-300 @enderror"
                @error('descricao') aria-invalid="true" aria-describedby="descricao-error" @enderror
            >{{ old('descricao') }}</textarea>
            @error('descricao')
                <p id="descricao-error" class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <button
            type="submit"
            class="rounded-md bg-blue-600 px-4 py-2 font-semibold text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
        >
            Criar evento
        </button>
    </form>
</main>
@endsection
=======
@section('title', 'Criar Evento — FalaQ')

@section('content')
<div class="row">
    <!-- Formularço de envio de Pergunta -->
    <div class="col-md-5 mb-4">
        <div class="card shadow-sm p-3">
            <h4 class="fw-bold mb-3">💬 Faça sua Pergunta</h4>
            <form action="{{ route('eventos.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="titulo" class="form-label text-secondary">Titulo do Evento</label>

                    <input name="titulo" id="titulo" rows="4" 
                              class="form-control bg-dark text-white border-secondary"></input>

                </div>
                <div class="mb-3">
                    <label for="descricao" class="form-label text-secondary">Descrição do Evento</label>

                    <input name="descricao" id="descricao" rows="4" 
                              class="form-control bg-dark text-white border-secondary"></input>

       
                </div>
                <div class="mb-3">
                    <label for="data_evento" class="form-label text-secondary">Data</label>

                    <input name="data_evento" id="data_evento" rows="4"  type="date"
                              class="form-control bg-dark text-white border-secondary"></input>

                </div>
                <button type="submit" class="btn btn-primary w-100 fw-bold">Criar Evento</button>
            </form>
        </div>
    </div>
@endsection
>>>>>>> 2040cdaf2bedf48eacfc0dada965c0bb7f99f175
