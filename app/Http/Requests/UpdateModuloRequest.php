<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateModuloRequest extends FormRequest
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
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'data_inicio' => 'nullable|date|before_or_equal:data_fim',
            'data_fim' => 'nullable|date|after_or_equal:data_inicio',
            'qtd_licoes' => 'required|integer|min:0',
            'id_us' => 'exists:users,id',
            'curso_id' => 'required|exists:cursos,id',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'A descrição do módulo é obrigatório.',
            'nome.max' => 'A descrição do módulo não pode ter mais de 255 caracteres.',
            
            'data_inicio.before_or_equal' => 'A data de início não pode ser maior que a data de fim.',
            'data_fim.after_or_equal' => 'A data de fim não pode ser menor que a data de início.',

            'qtd_licoes.required' => 'A quantidade de lições é obrigatória.',
            'qtd_licoes.integer' => 'A quantidade de lições deve ser um número inteiro.',
            'qtd_licoes.min' => 'A quantidade de lições não pode ser negativa.',

            // 'id_us.required' => 'O ID do usuário é obrigatório.',
            'id_us.exists' => 'O usuário selecionado não existe.',

            'curso_id.required' => 'O curso associado ao módulo é obrigatório.',
            'curso_id.exists' => 'O curso selecionado não existe.',
        ];
    }
}
