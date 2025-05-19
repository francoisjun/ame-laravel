<?php

namespace Database\Factories;

use App\Models\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paciente>
 */
class PacienteFactory extends Factory
{
    protected $model = Paciente::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'cpf' => fake()->cpf(false),  // Gera um CPF válido
            'nascimento' => fake()->date('Y-m-d', '2003-01-01'),  // Data de nascimento entre 1900 e 2003
            'genero' => fake()->randomElement(['m', 'f', 'o']),  // Gênero aleatório
            'filiacao_mae' => fake()->name('female'),  // Nome fictício de mãe
            'filiacao_pai' => fake()->name('male'),  // Nome fictício de pai
            'responsavel' => fake()->name(),  // Nome fictício de responsável
            'endereco' => fake()->streetAddress(),
            'complemento' => fake()->secondaryAddress(),
            'bairro' => fake()->word(),  // Nome de bairro aleatório
            'cidade' => fake()->city(),
            'cep' => '58200000',  // Código postal
            'uf' => fake()->stateAbbr(),  // Estado abreviado (ex.: SP, RJ)
            'telefone' => fake()->cellphoneNumber(false),
        ];
    }
}
