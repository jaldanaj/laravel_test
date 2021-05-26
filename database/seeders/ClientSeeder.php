<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use DB;
use Illuminate\Support\Str;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'cod' => 'COD-'.strtoupper(Str::random(8)),
            'name' => 'Pedro Pérez',
            'city' => 'Bogotá D.C.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('clients')->insert([
            'cod' => 'COD-'.strtoupper(Str::random(8)),
            'name' => 'Andrés López',
            'city' => 'Bogotá D.C.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('clients')->insert([
            'cod' => 'COD-'.strtoupper(Str::random(8)),
            'name' => 'Diana Anaya',
            'city' => 'Bogotá D.C.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('clients')->insert([
            'cod' => 'COD-'.strtoupper(Str::random(8)),
            'name' => 'Andrea Jiménez',
            'city' => 'Bogotá D.C.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('clients')->insert([
            'cod' => 'COD-'.strtoupper(Str::random(8)),
            'name' => 'Lorenzo Rodríguez',
            'city' => 'Cali',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('clients')->insert([
            'cod' => 'COD-'.strtoupper(Str::random(8)),
            'name' => 'Tatiana Mosquera',
            'city' => 'Cali',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('clients')->insert([
            'cod' => 'COD-'.strtoupper(Str::random(8)),
            'name' => 'Juan Hernández',
            'city' => 'Cali',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('clients')->insert([
            'cod' => 'COD-'.strtoupper(Str::random(8)),
            'name' => 'Silvia Badillo',
            'city' => 'Medellín',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('clients')->insert([
            'cod' => 'COD-'.strtoupper(Str::random(8)),
            'name' => 'Alan De Moya',
            'city' => 'Medellín',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('clients')->insert([
            'cod' => 'COD-'.strtoupper(Str::random(8)),
            'name' => 'José Solano',
            'city' => 'Barranquilla',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
