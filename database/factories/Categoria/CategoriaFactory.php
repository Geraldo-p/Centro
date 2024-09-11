<?php

namespace Database\Factories\Categoria;

use App\Models\Categoria\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Auth;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categoria\Categoria>
 */
class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Categoria::class;  // Definindo o modelo correto

    public function definition(): array
    {
        return [
            // 'nome' => $this->faker->word,            // Um nome genérico (word ao invés de name, pois é categoria)
            // 'familia' => $this->faker->word,         // Um nome de família (ou categoria principal)
            // 'descricao' => $this->faker->sentence,   // Uma descrição curta
            // 'id_us' => 1, // ID aleatório (ou configure manualmente no seeder)
        ];
    }
}
