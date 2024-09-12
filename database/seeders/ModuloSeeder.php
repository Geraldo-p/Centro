<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuloSeeder extends Seeder
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
            DB::table('modulos')->insert([
                'nome' => $faker->word,
                'descricao' => $faker->sentence,
                'data_inicio' => $faker->date(),
                'data_fim' => $faker->date(),
                'qtd_licoes' => $faker->numberBetween(1, 20),
                'id_us' => 1, // Ajuste o intervalo conforme a quantidade de usuários
                'curso_id' => $faker->numberBetween(1, 10), // Ajuste o intervalo conforme a quantidade de cursos
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
