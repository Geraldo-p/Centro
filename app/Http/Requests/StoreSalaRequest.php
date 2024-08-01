<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSalaRequest extends FormRequest
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
        return [
            'descricao' => 'required|max:255|unique:salas,descricao',
            'capacidade' => 'required|integer|min:1',
            'tipo' => 'required|max:255',
        ];
    }
    public function messages()
    {
        return [
            'descricao.required' => 'A descrição da sala é obrigatória.',
            'descricao.unique' => 'A descrição da sala já está em uso.',
            'descricao.max' => 'A descrição da sala não pode ter mais de 255 caracteres.',
            'capacidade.required' => 'A capacidade da sala é obrigatória.',
            'capacidade.integer' => 'A capacidade da sala deve ser um número inteiro.',
            'capacidade.min' => 'As salas devem ter no minimo 1',
            'tipo.required' => 'O tipo da sala é obrigatório.',
            'tipo.max' => 'O tipo da sala não pode ter mais de 255 caracteres.',
        ];
    }
}
