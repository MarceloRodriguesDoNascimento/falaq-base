@extends('layouts.app')

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
