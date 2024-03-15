<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Todo;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 1; $i <= 10000; $i++) {
            Todo::create([
                'nama' => 'Todo ' . $i, // Generate a Todo name using the loop counter
                'keterangan' => rand(0, 1), // Generate a random integer (0 or 1) for is_done status
            ]);
        }
    }
}
