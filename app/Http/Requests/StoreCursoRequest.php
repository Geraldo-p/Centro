<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCursoRequest extends FormRequest
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
            'nome' => 'required|string|max:255|unique:cursos',
            'duracao' => 'nullable|string|max:255',
            'foto' => 'nullable|string|max:255',
            'preco' => 'required|numeric',
            'pag_mes' => 'required|numeric',
            'data_inicio' => 'nullable|date',
            'data_fim' => 'nullable|date|after_or_equal:data_inicio',
            'descricao' => 'nullable|string',
            'id_us' => 'required|exists:users,id',
            'id_categ' => 'required|exists:categorias,id',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O nome é obrigatório.',
            'nome.string' => 'O nome deve ser uma string.',
            'nome.max' => 'O nome não pode ter mais de 255 caracteres.',
            'nome.unique' => 'Este nome já está em uso na tabela.',

            'preco.required' => 'O preço de inscrição é obrigatório.',
            'preco.numeric' => 'O preço deve ser do tipo númerico.',

            'pag_mes.required' => 'Este camo de pagamentos por mês é obrigatório.',
            'pag_mes.numeric' => 'O pagamentos por mês deve ser do tipo númerico.',

            'data_fim.after_or_equal' => 'A data de termino deve ser maior ou igual à data de início.',

            'id_us.required' => 'O ID do usuário é obrigatório.',
            'id_us.exists' => 'As Credenciais do usuário selecionado não existe na tabela de usuários.',

            'id_categ.required' => 'A categoria é obrigatório.',
            'id_categ.exists' => 'A categoria selecionada não existe.',
        ];
    }


}
