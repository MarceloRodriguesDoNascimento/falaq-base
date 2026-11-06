<?php
<<<<<<< HEAD
 
namespace App\Http\Requests;
 
use Illuminate\Foundation\Http\FormRequest;
 
class StorePerguntaRequest extends FormRequest
{
    /**
     * Determina se o usuário está autorizado a fazer a requisição.
=======

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePerguntaRequest extends FormRequest
{
    /**
     * Determina se o usuário está autorizado a fazer esta requisição.
>>>>>>> 2040cdaf2bedf48eacfc0dada965c0bb7f99f175
     */
    public function authorize(): bool
    {
        return true;
    }
<<<<<<< HEAD
 
    /**
     * Regras de validação estritas para evitar spam.
=======

    /**
     * TICKET #001: Implemente aqui as regras de validação estritas.
     * Requisitos:
     * - texto: obrigatório, string, mínimo de 10 caracteres, máximo de 255.
     * - evento_id: obrigatório, deve existir na tabela eventos.
>>>>>>> 2040cdaf2bedf48eacfc0dada965c0bb7f99f175
     */
    public function rules(): array
    {
        return [
<<<<<<< HEAD
            'texto'     => ['required', 'string', 'min:10', 'max:255'],
            'evento_id' => ['required', 'exists:eventos,id'],
        ];
    }
 
    /**
     * Mensagens de erro customizadas (opcional, boa prática).
     */
    public function messages(): array
    {
        return [
            'texto.required' => 'O texto da pergunta é obrigatório.',
            'texto.min'      => 'A pergunta deve conter no mínimo 10 caracteres.',
            'texto.max'      => 'A pergunta não pode exceder 255 caracteres.',
        ];
    }
}
=======
            // TODO (Dev Jr): Adicione as regras de validação para o Ticket #001
        ];
    }
}
>>>>>>> 2040cdaf2bedf48eacfc0dada965c0bb7f99f175
