<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTurmaRequest extends FormRequest
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
    public function rules()
    {
        return [
            'nome' => 'required|string|max:255|unique:turmas,nome,'. $this->route("turma")->id,
            'sala_id' => 'required|exists:salas,id',
            'funcionario_id' => 'required|exists:funcionarios,id',
            'horario_ENTRADA' => 'required|date_format:H:i',
            'horario_SAIDA' => 'required|date_format:H:i|after:horario_ENTRADA',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nome.required' => 'a Descrição da turma é obrigatório.',
            'nome.unique' => 'a descrição da turma deve ser única exclusiva',
            'nome.string' => 'O nome da turma deve ser um texto.',
            'nome.max' => 'O nome da turma não pode ter mais de 255 caracteres.',
            'sala_id.required' => 'A sala é obrigatória.',
            'sala_id.exists' => 'A sala selecionada é inválida.',
            'funcionario_id.required' => 'O formador é obrigatório.',
            'funcionario_id.exists' => 'O formador selecionado é inválido.',
            'horario_ENTRADA.required' => 'O horário de entrada é obrigatório.',
            'horario_ENTRADA.date_format' => 'O horário de entrada deve estar no formato HH:MM.',
            'horario_SAIDA.required' => 'O horário de saída é obrigatório.',
            'horario_SAIDA.date_format' => 'O horário de saída deve estar no formato HH:MM.',
            'horario_SAIDA.after' => 'O horário de saída deve ser depois do horário de entrada.',
        ];
    }
}
