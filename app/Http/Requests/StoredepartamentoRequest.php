<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoredepartamentoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return[
                'nome' => 'required|string|max:255|unique:departamentos',
                'descricao' => 'nullable|string',
                'hora_entrada' => 'required|date_format:H:i',
                'hora_fechamento' => 'required|date_format:H:i|after:hora_entrada',
                'id_us' => 'exists:users,id',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'A descrição é obrigatório.',
            'nome.max' => 'A descrição não pode ter mais de 255 caracteres.',
            'nome.unique' => 'Esta Descrição já está em uso.',

            'hora_entrada.required' => 'A hora de entrada é obrigatória.',
            'hora_entrada.date_format' => 'A hora de entrada deve estar no formato HH:MM.',

            'hora_fechamento.required' => 'A hora de fechamento é obrigatória.',
            'hora_fechamento.date_format' => 'A hora de fechamento deve estar no formato HH:MM.',
            'hora_fechamento.after' => 'A hora de fechamento deve ser posterior à hora de entrada.',

            'id_us.required' => 'O ID do usuário é obrigatório.',
            'id_us.exists' => 'As Credenciais do usuário selecionado não existe na tabela de usuários.',
        ];
    }
}
