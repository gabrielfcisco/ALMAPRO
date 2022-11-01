<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\business;
use App\Models\alunos;
<<<<<<< Updated upstream
=======
use App\Models\materias;
use App\Models\professores;
use App\Models\User;
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
=======
        professores::factory(5)->create();
        materias::factory(3)->create();
        User::factory(10)->create();
>>>>>>> Stashed changes

    }
}
