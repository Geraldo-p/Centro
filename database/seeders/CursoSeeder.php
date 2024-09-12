<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoSeeder extends Seeder
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
            DB::table('cursos')->insert([
                'nome' => $faker->word,
                'duracao' => $faker->randomElement(['1 mês', '2 meses', '3 meses', '4 meses']),
                'foto' => $faker->imageUrl(),
                'preco' => $faker->randomFloat(2, 100, 1000),
                'pag_mes' => $faker->randomFloat(2, 10, 100),
                'data_inicio' => $faker->date(),
                'data_fim' => $faker->date(),
                'descricao' => $faker->sentence,
                'id_us' => 1, // Ajuste o intervalo conforme a quantidade de usuários
                'id_categ' => $faker->numberBetween(1, 10), // Ajuste o intervalo conforme a quantidade de categorias
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        // DB::table('cursos')->insert([
        //     [
        //         'nome' => 'Curso de Programação em PHP',
        //         'duracao' => '3 meses',
        //         'foto' => 'https://example.com/images/php.jpg',
        //         'preco' => 1500.00,
        //         'pag_mes' => 500.00,
        //         'data_inicio' => Carbon::create('2024', '09', '01'),
        //         'data_fim' => Carbon::create('2024', '12', '01'),
        //         'descricao' => 'Aprenda PHP do básico ao avançado.',
        //         'id_us' => 1, // Certifique-se de que o id do usuário existe
        //         'id_categ' => 1, // Certifique-se de que o id da categoria existe
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'nome' => 'Curso de Design Gráfico',
        //         'duracao' => '4 meses',
        //         'foto' => 'https://example.com/images/design.jpg',
        //         'preco' => 2000.00,
        //         'pag_mes' => 500.00,
        //         'data_inicio' => Carbon::create('2024', '10', '01'),
        //         'data_fim' => Carbon::create('2025', '02', '01'),
        //         'descricao' => 'Curso completo de design gráfico e ferramentas.',
        //         'id_us' => 2,
        //         'id_categ' => 2,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'nome' => 'Curso de Marketing Digital',
        //         'duracao' => '2 meses',
        //         'foto' => 'https://example.com/images/marketing.jpg',
        //         'preco' => 1000.00,
        //         'pag_mes' => 500.00,
        //         'data_inicio' => Carbon::create('2024', '11', '01'),
        //         'data_fim' => Carbon::create('2025', '01', '01'),
        //         'descricao' => 'Técnicas e estratégias de marketing digital.',
        //         'id_us' => 3,
        //         'id_categ' => 3,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]
        // ]);
    }
}
