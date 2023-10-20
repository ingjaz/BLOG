<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        $curso = new Curso();

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
        //Mando a llamar a mi factory Curso para crear 50 registros
        Curso::factory(50)->create();
    }
}
