<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Client;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AddressSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(FactorySeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(ArticleFactorySeeder::class);
        $this->call(ArticleOrderSeeder::class);
        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
