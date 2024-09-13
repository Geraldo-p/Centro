<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $numRecords = 5;

        for ($i = 0; $i < $numRecords; $i++) {
            $user = User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                // 'password' => Hash::make($faker->password),
                'password' => "123",
                'nivel_acesso' => $faker->randomElement(['Formando', 'Formador', 'Administrador', 'Super admin'])
            ]);
        }
        // CONTACTOS
        for ($i = 0; $i < $numRecords; $i++) {

            DB::table('contactos')->insert([
                'email' => $faker->email,
                'telefone' => $faker->phoneNumber,
                'telefoneOP' => $faker->phoneNumber,
                'watsapp' => $faker->phoneNumber,
                'outros' => $faker->sentence,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // CATEGORIA
        for ($i = 0; $i < $numRecords; $i++) {

            DB::table('categorias')->insert([
                'nome' => $faker->word,
                'familia' => $faker->word,
                'descricao' => $faker->sentence,
                'id_us' => $faker->numberBetween(1, 5), // Ajuste o intervalo conforme a quantidade de usuários
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        //CURSOS
        for ($i = 0; $i < $numRecords; $i++) {

            DB::table('cursos')->insert([
                'nome' => $faker->word,
                'duracao' => $faker->randomElement(['1 mês', '2 meses', '3 meses', '4 meses']),
                'foto' => $faker->imageUrl(),
                'preco' => $faker->randomFloat(2, 100, 1000),
                'pag_mes' => $faker->randomFloat(2, 5, 100),
                'data_inicio' => $faker->date(),
                'data_fim' => $faker->date(),
                'descricao' => $faker->sentence,
                'id_us' => $faker->numberBetween(1, 5), // Ajuste o intervalo conforme a quantidade de usuários
                'id_categ' => $faker->numberBetween(1, 5), // Ajuste o intervalo conforme a quantidade de categorias
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // MODULOS
        for ($i = 0; $i < $numRecords; $i++) {

            DB::table('modulos')->insert([
                'nome' => $faker->word,
                'descricao' => $faker->sentence,
                'data_inicio' => $faker->date(),
                'data_fim' => $faker->date(),
                'qtd_licoes' => $faker->numberBetween(1, 20),
                'id_us' => $faker->numberBetween(1, 5), // Ajuste o intervalo conforme a quantidade de usuários
                'curso_id' => $faker->numberBetween(1, 5), // Ajuste o intervalo conforme a quantidade de cursos
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // ENDERECO
        for ($i = 0; $i < $numRecords; $i++) {

            DB::table('enderecos')->insert([
                'rua' => $faker->streetAddress,
                'bairro' => $faker->word,
                'provincia' => $faker->word,
                'municipio' => $faker->word,
                'pais' => $faker->country,
                'enderecoDetalhado' => $faker->secondaryAddress,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // DEPARTAMENTO
        for ($i = 0; $i < $numRecords; $i++) {

            DB::table('departamentos')->insert([
                'nome' => $faker->word,
                'descricao' => $faker->sentence,
                'hora_entrada' => $faker->time('H:i:s'),
                'hora_fechamento' => $faker->time('H:i:s'),
                'id_us' => $faker->numberBetween(1, 5), // Ajuste o intervalo conforme a quantidade de usuários
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // FORMANDO
        for ($i = 0; $i < $numRecords; $i++) {

            DB::table('formandos')->insert([
                'nome' => $faker->name,
                'genero' => $faker->randomElement(['Masculino', 'Feminino']),
                'data_nascimento' => $faker->date(),
                'estado_civil' => $faker->randomElement(['Solteiro', 'Casado', 'Divorciado']),
                'nacionalidade' => $faker->country,
                'provincia' => $faker->word,
                'municipio' => $faker->word,
                'bi' => $faker->optional()->numerify('##########'),
                'instituicao' => $faker->word,
                'nivel_escolaridade' => $faker->word,
                'curso' => $faker->word,
                'periodo' => $faker->randomElement(['Manhã', 'Tarde', 'Noite']),
                'situacao' => $faker->randomElement(['Estudando', 'Terminado']),
                'foto' => $faker->imageUrl(),
                'num_formando' =>  rand(1000, 9000) . "UE" . $faker->numberBetween(1, 5),
                'contacto_id' => $faker->optional()->numberBetween(1, 5), // Ajuste o intervalo conforme a quantidade de contactos
                'endereco_id' => $faker->optional()->numberBetween(1, 5), // Ajuste o intervalo conforme a quantidade de endereços
                'id_us' => $faker->numberBetween(1, 5), // Ajuste o intervalo conforme a quantidade de usuários
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // FUNCIONARIO
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
                'departamento_id' => $faker->optional()->numberBetween(1, 5), // Ajuste o intervalo conforme a quantidade de departamentos
                'contacto_id' => $faker->optional()->numberBetween(1, 5), // Ajuste o intervalo conforme a quantidade de contactos
                'endereco_id' => $faker->optional()->numberBetween(1, 5), // Ajuste o intervalo conforme a quantidade de endereços
                'id_us' => $faker->numberBetween(1, 5), // Ajuste o intervalo conforme a quantidade de usuários
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // LISTA DE PRESENÇA PRINCIPAL
        for ($i = 0; $i < $numRecords; $i++) {

            DB::table('lista__presenca__principals')->insert([
                'data_presenca' => $faker->date(),
                'aula_nome' => $faker->word,
                'modulo_id' => $faker->numberBetween(1, 5), // Ajuste o intervalo conforme a quantidade de módulos
                'id_us' => $faker->numberBetween(1, 5), // Ajuste o intervalo conforme a quantidade de usuários
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // LISTA DE PRESENÇA
        for ($i = 0; $i < $numRecords; $i++) {

            DB::table('lista__presencas')->insert([
                'presenca' => $faker->randomElement(['Presente', 'Ausente']),
                'formando_id' => $faker->numberBetween(1, 5), // Ajuste o intervalo conforme a quantidade de formandos
                'lista_id' => $faker->numberBetween(1, 5), // Ajuste o intervalo conforme a quantidade de lista__presenca__principals
                'id_us' => $faker->numberBetween(1, 5), // Ajuste o intervalo conforme a quantidade de usuários
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // SALA
        for ($i = 0; $i < $numRecords; $i++) {

            DB::table('salas')->insert([
                'descricao' => $faker->word,
                'capacidade' => $faker->numberBetween(5, 100),
                'tipo' => $faker->word,
                'id_us' => $faker->numberBetween(1, 5), // Ajuste o intervalo conforme a quantidade de usuários
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // TURMA
        for ($i = 0; $i < $numRecords; $i++) {

            DB::table('turmas')->insert([
                'nome' => 'Turma ' . $faker->word,
                'sala_id' => $faker->numberBetween(1, 5), // Ajuste o intervalo conforme a quantidade de salas
                'funcionario_id' => $faker->numberBetween(1, 5), // Ajuste o intervalo conforme a quantidade de funcionários
                'horario_ENTRADA' => $faker->time('H:i:s'),
                'horario_SAIDA' => $faker->time('H:i:s'),
                'status' => $faker->randomElement(['Disponivel', 'Indisponivel', 'Cheia']),
                'id_us' => $faker->numberBetween(1, 5), // Ajuste o intervalo conforme a quantidade de usuários
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // TURMA FORMANDO
        for ($i = 0; $i < $numRecords; $i++) {

            DB::table('turma__formandos')->insert([
                'turma_id' => $faker->numberBetween(1, 5), // Ajuste o intervalo conforme a quantidade de turmas
                'formando_id' => $faker->numberBetween(1, 5), // Ajuste o intervalo conforme a quantidade de formandos
                'id_us' => $faker->numberBetween(1, 5), // Ajuste o intervalo conforme a quantidade de usuários
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
