<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;
//use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        //Se utiliza el mismo codigo que utilizamos en tinker
        /*$curso = new Curso();

        $curso->name = "Laravel";
        $curso->description = "Algo genial";
        $curso->categoria = "Desarrollo web";

        $curso->save();

        $curso2 = new Curso();

        $curso2->name = "Laravel";
        $curso2->description = "Algo genial";
        $curso2->categoria = "Desarrollo web";

        $curso2->save();
        */

        //Otra forma de llamar un fatory dentro de un Seeder
        \App\Models\User::factory(10)->create();

        //Aqui estoy mandando a llamar a mi Seeder que cree llamado CursoSeeder
        $this->call(CursoSeeder::class);

    }
}
