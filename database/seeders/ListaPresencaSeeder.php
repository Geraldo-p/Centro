<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListaPresencaSeeder extends Seeder
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
            DB::table('lista__presencas')->insert([
                'presenca' => $faker->randomElement(['Presente', 'Ausente']),
                'formando_id' => $faker->numberBetween(1, 10), // Ajuste o intervalo conforme a quantidade de formandos
                'lista_id' => $faker->numberBetween(1, 10), // Ajuste o intervalo conforme a quantidade de lista__presenca__principals
                'id_us' => 1, // Ajuste o intervalo conforme a quantidade de usuários
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
