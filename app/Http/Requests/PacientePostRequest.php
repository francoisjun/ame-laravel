<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PacientePostRequest extends FormRequest
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
            'cpf' => [
                'required',
                'cpf',
                Rule::unique('pacientes','cpf'),
            ],
            'nascimento' => 'required|date|before:now',
            'genero' => 'required|in:m,f,o', // m: Masculino, f: Feminino, o: Outro 
            'filiacao_pai' => 'nullable|string|max:255',
            'filiacao_mae' => 'nullable|string|max:255',
            'responsavel' => 'nullable|string|max:255',
            'endereco' => 'required|string|max:255',
            'complemento' => 'nullable|string|max:255',
            'bairro' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'cep' => 'required|numeric|digits:8',
            'uf' => 'required|string|size:2|in:AC,AL,AP,AM,BA,CE,DF,ES,GO,MA,MT,MS,MG,PA,PB,PR,PE,PI,RJ,RN,RS,RO,RR,SC,SP,SE,TO',
            'telefone' => 'nullable|numeric|digits:11',
            'email' => 'nullable|email|max:255',
        ];
    }
}
