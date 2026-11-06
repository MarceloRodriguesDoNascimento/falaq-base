<?php
 
namespace App\Http\Requests;
 
use Illuminate\Foundation\Http\FormRequest;
 
class StorePerguntaRequest extends FormRequest
{
    /**
     * Determina se o usuário está autorizado a fazer a requisição.
     */
    public function authorize(): bool
    {
        return true;
    }
 
    /**
     * Regras de validação estritas para evitar spam.
     */
    public function rules(): array
    {
        return [
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