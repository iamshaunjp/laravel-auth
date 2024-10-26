<?php

namespace Database\Seeders;

use App\Models\Dojo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DojoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dojo::factory()->count(10)->create();
    }
}
