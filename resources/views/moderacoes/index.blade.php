@extends('layouts.app')

@section('title', 'Fila de moderação — FalaQ')

@section('content')
<div class="mb-4">
    <h1 class="h3">Fila de moderação</h1>
    <p class="text-secondary">{{ $evento->titulo }}</p>
</div>

@forelse($moderacoes as $moderacao)
    <div class="card mb-3">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-start gap-3">
                <div>
                    <p class="mb-1 fw-bold">{{ $moderacao->pergunta->texto }}</p>
                    <p class="mb-1 text-secondary">Autor: {{ $moderacao->pergunta->user->name ?? 'Anônimo' }}</p>
                    <p class="mb-2">Motivo: {{ $moderacao->motivo }}</p>
                    <span class="badge bg-secondary">{{ $moderacao->status }}</span>
                </div>
                @if($moderacao->status === 'analisando')
                    <div class="d-flex gap-2">
                        <form action="{{ route('moderacoes.update-status', $moderacao) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="status" value="aprovada">
                            <button type="submit" class="btn btn-success">Aprovar pergunta</button>
                        </form>
                        <form action="{{ route('moderacoes.update-status', $moderacao) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="status" value="rejeitada">
                            <button type="submit" class="btn btn-danger">Rejeitar pergunta</button>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
@empty
    <div class="alert alert-info">Não há denúncias para este evento.</div>
@endforelse

{{ $moderacoes->links() }}
@endsection
