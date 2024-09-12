<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TurmaSeeder extends Seeder
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
            DB::table('turmas')->insert([
                'nome' => 'Turma ' . $faker->word,
                'sala_id' => $faker->numberBetween(1, 10), // Ajuste o intervalo conforme a quantidade de salas
                'funcionario_id' => $faker->numberBetween(1, 10), // Ajuste o intervalo conforme a quantidade de funcionários
                'horario_ENTRADA' => $faker->time('H:i:s'),
                'horario_SAIDA' => $faker->time('H:i:s'),
                'status' => $faker->randomElement(['Disponivel', 'Indisponivel', 'Cheia']),
                'id_us' => 1, // Ajuste o intervalo conforme a quantidade de usuários
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
