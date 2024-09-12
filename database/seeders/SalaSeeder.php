<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalaSeeder extends Seeder
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
            DB::table('salas')->insert([
                'descricao' => $faker->word,
                'capacidade' => $faker->numberBetween(10, 100),
                'tipo' => $faker->word,
                'id_us' => $faker->numberBetween(1, 10), // Ajuste o intervalo conforme a quantidade de usuários
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
