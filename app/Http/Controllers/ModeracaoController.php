<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreModeracaoRequest;
use App\Models\Evento;
use App\Models\Moderacao;
use App\Models\Pergunta;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ModeracaoController extends Controller
{
    public function store(StoreModeracaoRequest $request, Pergunta $pergunta)
    {
        $pergunta->moderacoes()->create($request->validated());

        return back()->with('sucesso', 'Denúncia enviada para análise.');
    }

    public function index(Evento $evento)
    {
        $this->authorize('moderate', $evento);

        $moderacoes = Moderacao::with(['pergunta', 'pergunta.evento', 'pergunta.user'])
            ->whereHas('pergunta', function ($query) use ($evento) {
                $query->where('evento_id', $evento->id);
            })
            ->latest()
            ->paginate(15);

        return view('moderacoes.index', compact('evento', 'moderacoes'));
    }

    public function updateStatus(Request $request, Moderacao $moderacao)
    {
        $this->authorize('moderate', $moderacao->pergunta->evento);

        $validated = $request->validate([
            'status' => ['required', Rule::in(['aprovada', 'rejeitada'])],
        ]);

        $moderacao->update(['status' => $validated['status']]);
        $moderacao->pergunta->update([
            'status' => $validated['status'],
            'is_public' => $validated['status'] === 'aprovada',
        ]);

        return redirect()
            ->route('eventos.moderacoes', $moderacao->pergunta->evento)
            ->with('sucesso', 'Decisão de moderação registrada.');
    }
}
