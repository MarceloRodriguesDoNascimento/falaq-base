<?php
<<<<<<< HEAD
 
namespace App\Http\Controllers;
 
use App\Models\Evento;
use App\Models\Pergunta;
use Illuminate\Http\Request;
 
class EventoController extends Controller
{
    public function create()
    {
        return view('eventos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => ['required', 'string', 'max:255'],
            'descricao' => ['nullable', 'string'],
        ]);

        $validated['user_id'] = $request->user()->id;
        Evento::create($validated);

        return redirect()
            ->route('eventos.create')
            ->with('sucesso', 'Evento criado com sucesso.');
    }

    public function storePergunta(Request $request, int $id)
    {
        $validated = $request->validate([
            'texto' => ['required', 'string', 'min:10', 'max:255'],
        ]);

        $evento = Evento::findOrFail($id);
        $evento->perguntas()->create([
            'user_id' => $request->user()->id,
            'texto' => $validated['texto'],
            'status' => 'pendente',
        ]);

        return redirect()
            ->route('eventos.show', $evento->id)
            ->with('sucesso', 'Pergunta enviada para moderação.');
    }

    /**
     * Exibe o evento com suas perguntas paginadas e ordenadas.
     */
    public function show(Evento $evento)
    {
        // 1. Filtra as perguntas do evento específico
        // 2. Ordena pelas mais votadas, com as mais recentes como desempate
        // 3. Pagina em blocos de 10 registros por página
        $perguntas = Pergunta::where('evento_id', $evento->id)
            ->where('is_public', true)
            ->with(['user', 'evento'])
            ->withCount('votos')
            ->withExists([
                'votos as user_voted' => fn ($query) => $query->where('users.id', auth()->id()),
            ])
            ->orderByDesc('votos_count')
            ->orderByDesc('created_at')
            ->paginate(10);
=======

namespace App\Http\Controllers;

use App\Http\Requests\EventoFormRequest;
use App\Models\Evento;
use App\Models\Pergunta;
use App\Http\Requests\StorePerguntaRequest;
use Illuminate\Support\Facades\Auth;

class EventoController extends Controller
{
    public function index()
    {
        $eventos = Evento::all();
        return view('eventos.index', compact('eventos'));
    }

    public function show($id)
    {
        $evento = Evento::find($id);

        $perguntas = Pergunta::all();
>>>>>>> 2040cdaf2bedf48eacfc0dada965c0bb7f99f175

        return view('eventos.show', compact('evento', 'perguntas'));
    }

<<<<<<< HEAD
    public function votar(Pergunta $pergunta)
    {
        $pergunta->votos()->toggle(auth()->id());

        return back()->with('sucesso', 'Seu voto foi atualizado.');
    }

    public function destroyPergunta(Pergunta $pergunta)
    {
        $this->authorize('delete', $pergunta);

        $eventoId = $pergunta->evento_id;
        $pergunta->delete();

        return redirect()
            ->route('eventos.show', $eventoId)
            ->with('sucesso', 'Pergunta excluída com sucesso.');
=======
 
    public function storePergunta(StorePerguntaRequest $request, $id)
    {
        $evento = Evento::findOrFail($id);

        Pergunta::create([
            'evento_id' => $evento->id,
            'user_id' => Auth::user()->id,
            'texto'     => $request->input('texto'),
            'status'    => 'pendente',
        ]);

        return redirect()->route('eventos.show', $evento->id)
            ->with('sucesso', 'Sua pergunta foi enviada com sucesso!');
    }

    public function create(){
        return view('eventos.create');
    }

    public function store(EventoFormRequest $request){
        $evento = $request->user()->eventos()->create($request->validated());
        return redirect()->route('eventos.show', $evento->id);
>>>>>>> 2040cdaf2bedf48eacfc0dada965c0bb7f99f175
    }
}
