<?php

namespace Database\Seeders;

use App\Http\Controllers\GestionController;
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
        // \App\Models\User::factory(10)->create();
        $this->call([
           UserSeeder::class,
//            ComunicadoSeeder::class,
            GestionSeeder::class
        ]);
    }
}
