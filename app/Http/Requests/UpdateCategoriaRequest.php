<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoriaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Este campo é obrigatório.',
            'nome.unique' => 'Já existe uma categoria com este nome.',
            'nome.max' => 'O nome da categoria não pode ter mais que 255 caracteres.',
        ];
    }
}
