<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormandoRequest extends FormRequest
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
            'nome' => 'string|max:255',
            'genero' => 'string|max:50',
            'data_nascimento' => 'date',
            'estado_civil' => 'string|max:50',
            'nacionalidade' => 'string|max:100',
            'provincia' => 'string|max:100',
            'municipio' => 'string|max:100',
            'bi' => 'nullable|string|max:16',
            'foto' => 'nullable|image|max:10240', // Aceita somente imagens com tamanho máximo de 10MB

            'email' => 'required|nullable|string|email|max:100',
            'telefone' => 'string|size:9',
            'outros' => 'nullable|string|max:200',

            'rua' => 'nullable|string|max:150',
            'bairro' => 'string|max:100',
            'pais' => 'string|max:100',
            'enderecoDetalhado' => 'nullable|string|max:255',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     */
    public function messages(): array
    {
        return [

            'nome.max' => 'O campo nome não pode ter mais que 255 caracteres.',

            'genero.string' => 'O campo gênero deve ser uma string.',
            'genero.max' => 'O campo gênero não pode ter mais que 50 caracteres.',

            'data_nascimento.date' => 'A data de nascimento deve ser uma data válida.',

            'estado_civil.string' => 'O estado civil deve ser uma string.',
            'estado_civil.max' => 'O estado civil não pode ter mais que 50 caracteres.',

            'nacionalidade.string' => 'A nacionalidade deve ser uma string.',
            'nacionalidade.max' => 'A nacionalidade não pode ter mais que 100 caracteres.',

            'provincia.string' => 'O campo província deve ser uma string.',
            'provincia.max' => 'O campo província não pode ter mais que 100 caracteres.',

            'municipio.string' => 'O campo município deve ser uma string.',
            'municipio.max' => 'O campo município não pode ter mais que 100 caracteres.',

            'bi.string' => 'O campo BI deve ser uma string.',
            'bi.max' => 'O campo BI não pode ter mais que 16 caracteres.',

            'foto.image' => 'O campo foto deve ser uma imagem.',
            'foto.max' => 'O campo foto não pode ter mais que 10MB.',

            'nivel_escolaridade.string' => 'O campo nível de escolaridade deve ser uma string.',
            'nivel_escolaridade.max' => 'O campo nível de escolaridade não pode ter mais que 100 caracteres.',

            'email.email' => 'O campo email deve ser um endereço de email válido.',
            'email.max' => 'O campo email não pode ter mais do que 100 caracteres.',
            'email.required' => 'Campo Obrigatório',

            'telefone.required' => 'O nº telefone é obrigatório.',
            'telefone.size' => 'O nº telefone deve ter exatamente 9 digitos.',

            'outros.max' => 'O campo outros não pode ter mais do que 200 caracteres.',

            'rua.max' => 'O campo rua não pode ter mais do que 150 caracteres.',
            'bairro.required' => 'O campo bairro é obrigatório.',
            'bairro.max' => 'O campo bairro não pode ter mais do que 100 caracteres.',
            'pais.required' => 'O país é obrigatório.',
            'pais.max' => 'O país não pode ter mais do que 100 caracteres.',
            'enderecoDetalhado.max' => 'O campo endereço detalhado não pode ter mais do que 255 caracteres.',
        ];
    }
}
