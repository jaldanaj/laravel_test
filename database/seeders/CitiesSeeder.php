<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use DB;
use Illuminate\Support\Str;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            'cod' => 'COD-'.strtoupper(Str::random(8)),
            'name' => 'Barranquilla',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('cities')->insert([
            'cod' => 'COD-'.strtoupper(Str::random(8)),
            'name' => 'Bogotá D.C.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('cities')->insert([
            'cod' => 'COD-'.strtoupper(Str::random(8)),
            'name' => 'Medellín',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('cities')->insert([
            'cod' => 'COD-'.strtoupper(Str::random(8)),
            'name' => 'Cali',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('cities')->insert([
            'cod' => 'COD-'.strtoupper(Str::random(8)),
            'name' => 'Pasto',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('cities')->insert([
            'cod' => 'COD-'.strtoupper(Str::random(8)),
            'name' => 'Cartagena',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('cities')->insert([
            'cod' => 'COD-'.strtoupper(Str::random(8)),
            'name' => 'Santamarta',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('cities')->insert([
            'cod' => 'COD-'.strtoupper(Str::random(8)),
            'name' => 'Riohacha',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
