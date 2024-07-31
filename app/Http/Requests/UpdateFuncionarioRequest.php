<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFuncionarioRequest extends FormRequest
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
        // dd($this->request->all());
        return [
            'nome' => 'required|string|max:255',
            'genero' => 'required|string|max:50',
            'data_nascimento' => 'required|date',
            'estado_civil' => 'required|string|max:50',
            'nacionalidade' => 'required|string|max:100',
            'provincia' => 'required|string|max:100',
            'municipio' => 'required|string|max:100',
            'bi' => 'nullable|string|max:16',

            'cargo' => 'required|string|max:100',
            'salario' => 'nullable|numeric|min:0',
            'data_contratacao' => 'nullable|date',
            'foto' => 'nullable|image|max:10240', // Aceita somente imagens com tamanho máximo de 10MB
            'nivel_escolaridade' => 'required|string|max:100',
            'linguas' => 'nullable|string|max:100',

            'nome_banco' => 'nullable|string|max:100',
            'num_conta_banco' => 'nullable|integer|min:0',
            'iban' => 'nullable|string|size:25|regex:/^AO06[A-Za-z0-9]+$/', // Aceita apenas IBAN com 25 caracteres que começam com AO06

            'status' => 'nullable|string|max:50|in:Activo,Inactivo', // Supondo que 'Activo' e 'Inactivo' sejam os possíveis valores
            'documento' => 'nullable|mimes:pdf|max:10240', // Aceita somente PDFs com tamanho máximo de 10MB

            'departamento_id' => 'nullable|exists:departamentos,id',

            'email' => 'nullable|string|email|max:100',
            'telefone' => 'required|string|size:9',
            'outros' => 'nullable|string|max:200',

            'rua' => 'nullable|string|max:150',
            'bairro' => 'required|string|max:100',
            'pais' => 'required|string|max:100',
            'enderecoDetalhado' => 'nullable|string|max:255',

        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     */
    public function messages(): array
    {
        return [
            'nome.required' => 'O nome do funcionário é obrigatório.',
            'nome.max' => 'O campo nome não pode ter mais que 255 caracteres.',

            'genero.required' => 'O campo gênero é obrigatório.',
            'genero.string' => 'O campo gênero deve ser uma string.',
            'genero.max' => 'O campo gênero não pode ter mais que 50 caracteres.',

            'data_nascimento.required' => 'A data de nascimento é obrigatória.',
            'data_nascimento.date' => 'A data de nascimento deve ser uma data válida.',

            'estado_civil.required' => 'O estado civil é obrigatório.',
            'estado_civil.string' => 'O estado civil deve ser uma string.',
            'estado_civil.max' => 'O estado civil não pode ter mais que 50 caracteres.',

            'nacionalidade.required' => 'A nacionalidade é obrigatório.',
            'nacionalidade.string' => 'A nacionalidade deve ser uma string.',
            'nacionalidade.max' => 'A nacionalidade não pode ter mais que 100 caracteres.',

            'provincia.required' => 'O campo província é obrigatório.',
            'provincia.string' => 'O campo província deve ser uma string.',
            'provincia.max' => 'O campo província não pode ter mais que 100 caracteres.',

            'municipio.required' => 'O campo município é obrigatório.',
            'municipio.string' => 'O campo município deve ser uma string.',
            'municipio.max' => 'O campo município não pode ter mais que 100 caracteres.',

            'bi.string' => 'O campo BI deve ser uma string.',
            'bi.max' => 'O campo BI não pode ter mais que 16 caracteres.',

            'cargo.required' => 'O campo cargo é obrigatório.',
            'cargo.string' => 'O campo cargo deve ser uma string.',
            'cargo.max' => 'O campo cargo não pode ter mais que 100 caracteres.',

            'salario.numeric' => 'O campo salário deve ser um número.',
            'salario.min' => 'O campo salário deve ser um valor positivo.',

            'data_contratacao.date' => 'O campo data de contratação deve ser uma data válida.',

            'foto.image' => 'O campo foto deve ser uma imagem.',
            'foto.max' => 'O campo foto não pode ter mais que 10MB.',

            'nivel_escolaridade.required' => 'O campo nível de escolaridade é obrigatório.',
            'nivel_escolaridade.string' => 'O campo nível de escolaridade deve ser uma string.',
            'nivel_escolaridade.max' => 'O campo nível de escolaridade não pode ter mais que 100 caracteres.',

            'linguas.string' => 'O campo línguas deve ser uma string.',
            'linguas.max' => 'O campo línguas não pode ter mais que 100 caracteres.',

            'nome_banco.string' => 'O campo nome do banco deve ser uma string.',
            'nome_banco.max' => 'O campo nome do banco não pode ter mais que 100 caracteres.',

            'num_conta_banco.integer' => 'O campo número da conta bancária deve ser um número inteiro.',
            'num_conta_banco.min' => 'O campo número da conta bancária deve ser um valor positivo.',

            'iban.string' => 'O campo IBAN deve ser uma string.',
            'iban.size' => 'O campo IBAN deve ter exatamente 25 caracteres.',
            'iban.regex' => 'O campo IBAN deve começar com "AO06".',

            'status.string' => 'O campo status deve ser uma string.',
            'status.max' => 'O campo status não pode ter mais que 50 caracteres.',
            'status.in' => 'O campo status deve ser um dos seguintes valores: Activo, Inactivo.',

            'documento.mimes' => 'O campo documento deve ser um arquivo do tipo PDF.',
            'documento.max' => 'O campo documento não pode ter mais que 10MB.',

            'departamento_id.exists' => 'O departamento selecionado é inválido.',

            'email.email' => 'O campo email deve ser um endereço de email válido.',
            'email.max' => 'O campo email não pode ter mais do que 100 caracteres.',

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
