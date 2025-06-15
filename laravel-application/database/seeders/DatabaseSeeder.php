<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Language;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\LanguageFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        User::factory()->create([
            'name' => 'test user4',
            'email'=> 'test@.com'
        ]);
        User::factory()->create([
            'name' => 'user5',
            'email' => 'user@gmail.com',
        ]);
        $this->call([
            CategorySeeder::class,
        ]);
        Category::factory()->count(17)->create();

         //////

        $this->call([
           LanguageSeeder::class,
        ]);
        Language::factory()->count(17)->create();

    }
}
