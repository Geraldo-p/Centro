<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoriaRequest extends FormRequest
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
            "nome" => "required|unique:categorias|max:255"
        ];
    }


    public function messages()
    {
        return [
            'nome.required' => 'Este Campo é Obrigatório.',
            'nome.unique' => 'Já existe uma categoria com este nome.'
        ];
    }
}
