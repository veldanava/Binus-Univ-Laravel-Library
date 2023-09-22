<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::factory()->times(20)->create();

        User::factory()->create([
            'name' => 'kiana',
            'email' => 'kiana@gmail.com',
        ]);

        $this->call([BookSeeder::class]);
    }
}
