<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\business;
use App\Models\alunos;
use App\Models\materias;
use App\Models\professores;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        alunos::factory(10)->create();
        professores::factory(5)->create();
        materias::factory(3)->create();

    }
}
