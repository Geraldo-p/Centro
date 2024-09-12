<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        // Número de registros fictícios que você deseja inserir
        $numRecords = 10;

        for ($i = 0; $i < $numRecords; $i++) {
            DB::table('funcionarios')->insert([
                'nome' => $faker->name,
                'genero' => $faker->randomElement(['Masculino', 'Feminino']),
                'data_nascimento' => $faker->date(),
                'estado_civil' => $faker->randomElement(['Solteiro', 'Casado', 'Divorciado']),
                'nacionalidade' => $faker->country,
                'provincia' => $faker->word,
                'municipio' => $faker->word,
                'bi' => $faker->optional()->numerify('##########'),
                'cargo' => $faker->word,
                'salario' => $faker->randomFloat(2, 500, 5000),
                'data_contratacao' => $faker->date(),
                'foto' => $faker->imageUrl(),
                'nivel_escolaridade' => $faker->word,
                'linguas' => $faker->word,
                'nome_banco' => $faker->word,
                'num_conta_banco' => $faker->optional()->numerify('###########'),
                'iban' => $faker->optional()->swiftBicNumber,
                'status' => $faker->randomElement(['Activo', 'Inactivo']),
                'documento' => $faker->word,
                'departamento_id' => $faker->optional()->numberBetween(1, 10), // Ajuste o intervalo conforme a quantidade de departamentos
                'contacto_id' => $faker->optional()->numberBetween(1, 10), // Ajuste o intervalo conforme a quantidade de contactos
                'endereco_id' => $faker->optional()->numberBetween(1, 10), // Ajuste o intervalo conforme a quantidade de endereços
                'id_us' => 1, // Ajuste o intervalo conforme a quantidade de usuários
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
