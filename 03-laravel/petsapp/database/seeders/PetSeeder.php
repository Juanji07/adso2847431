<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pets')->insert([
            'name' => 'Firulais',
            'kind' => 'Dog',
            'weight' => '16',
            'age' => '2',
            'breed' => 'Shiba Inu',
            'location' => 'Kioto',
            'description' => 'El shiba inu es un perro bonito',
            'created_at' => now()
        ]);
        DB::table('pets')->insert([
            'name' => 'Michi',
            'kind' => 'Cat',
            'weight' => '4',
            'age' => '18',
            'breed' => 'Siames',
            'location' => 'Osaka',
            'description' => 'El siames tiene lindos colores',
            'created_at' => now()
        ]);
        DB::table('pets')->insert([
            'name' => 'Toby',
            'kind' => 'Dog',
            'weight' => '19',
            'age' => '4',
            'breed' => 'Criollo',
            'location' => 'Colombia',
            'description' => 'Toby es negro',
            'created_at' => now()
        ]);
    }
}
