@extends('layouts.app')

@section('title', $evento->titulo . ' — FalaQ')

@section('content')
<div class="row">
    <!-- Formularço de envio de Pergunta -->
    <div class="col-md-5 mb-4">
        <div class="card shadow-sm p-3">
            <h4 class="fw-bold mb-3">💬 Faça sua Pergunta</h4>
            <form action="{{ route('eventos.perguntas.store', $evento->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="texto" class="form-label text-secondary">Texto da Pergunta</label>

                    <textarea name="texto" id="texto" rows="4" 
                              class="form-control bg-dark text-white border-secondary @error('texto') is-invalid @enderror"
                              placeholder="Digite sua dúvida ou comentário para o palestrante..."></textarea>

                    @error('texto')
                        <div class="invalid-feedback fw-bold">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100 fw-bold">Enviar Pergunta</button>
            </form>
        </div>
    </div>

    <!-- Lista de Perguntas (TICKET #002) -->
    <div class="col-md-7">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="fw-bold m-0">📋 Perguntas do Evento</h4>
            <span class="text-secondary small">Total no Banco: {{ $evento->perguntas->count() }}</span>
        </div>

        @forelse($perguntas as $pergunta)
            <div class="card mb-3 shadow-sm border-start border-4 border-primary">
                <div class="card-body">
                    <p class="fs-5 mb-2 text-white">{{ $pergunta->texto }}</p>
<<<<<<< HEAD
                    <p class="mb-2 text-secondary small">{{ $pergunta->user->name ?? 'Anônimo' }}</p>
=======
>>>>>>> 2040cdaf2bedf48eacfc0dada965c0bb7f99f175
                    <div class="d-flex justify-content-between align-items-center text-secondary small">
                        <span>Status: <span class="badge bg-success">{{ $pergunta->status }}</span></span>
                        <span>{{ $pergunta->created_at->format('d/m/Y H:i') }}</span>
                    </div>
<<<<<<< HEAD
                    <div class="d-flex align-items-center gap-2 mt-3">
                        <span class="text-secondary small">
                            {{ $pergunta->votos_count }} {{ $pergunta->votos_count === 1 ? 'voto' : 'votos' }}
                        </span>
                        @auth
                            <form action="{{ route('perguntas.votar', $pergunta) }}" method="POST">
                                @csrf
                                <button
                                    type="submit"
                                    class="btn btn-sm {{ $pergunta->user_voted ? 'btn-primary' : 'btn-outline-primary' }}"
                                    aria-pressed="{{ $pergunta->user_voted ? 'true' : 'false' }}"
                                >
                                    {{ $pergunta->user_voted ? 'Remover voto' : '👍 Votar' }}
                                </button>
                            </form>
                        @else
                            <span class="text-secondary small">Entre para votar.</span>
                        @endauth
                    </div>
                    @auth
                        <form action="{{ route('perguntas.moderar', $pergunta) }}" method="POST" class="mt-3">
                            @csrf
                            <label for="motivo-{{ $pergunta->id }}" class="form-label text-secondary small">
                                Denunciar pergunta
                            </label>
                            <textarea
                                id="motivo-{{ $pergunta->id }}"
                                name="motivo"
                                rows="2"
                                maxlength="255"
                                minlength="10"
                                required
                                class="form-control form-control-sm bg-dark text-white border-secondary"
                                placeholder="Descreva o motivo (10 a 255 caracteres)"
                            >{{ old('motivo') }}</textarea>
                            @error('motivo')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                            <button type="submit" class="btn btn-sm btn-outline-danger mt-2">Enviar denúncia</button>
                        </form>
                    @endauth
                    @can('delete', $pergunta)
                        <form action="{{ route('perguntas.destroy', $pergunta) }}" method="POST" class="mt-3">
                            @csrf
                            @method('DELETE')
                            <x-danger-button>Excluir pergunta</x-danger-button>
                        </form>
                    @endcan
=======
>>>>>>> 2040cdaf2bedf48eacfc0dada965c0bb7f99f175
                </div>
            </div>
        @empty
            <div class="alert alert-dark text-center p-4">
                Nenhuma pergunta enviada ainda. Seja o primeiro!
            </div>
        @endforelse

        <!-- TICKET #002: Renderização dos Botões de Paginação -->
        @if(method_exists($perguntas, 'links'))
<<<<<<< HEAD
            {{-- Abaixo da lista de perguntas --}}
            <div class="mt-6">
                {{ $perguntas->links() }}
=======
            <div class="d-flex justify-content-center mt-4">
                
>>>>>>> 2040cdaf2bedf48eacfc0dada965c0bb7f99f175
            </div>
        @endif
    </div>
</div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 2040cdaf2bedf48eacfc0dada965c0bb7f99f175
