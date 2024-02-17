<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Address;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $addresses = Address::inRandomOrder()->get();

        foreach($addresses as $address) {
            Client::create([
                'address_id' => $address->id,
                'saldo' => fake()->randomFloat(2, 0, 999999.99),
                'limite_credito' => fake()->randomFloat(2, 0, 3000000),
                'descuento' => fake()->randomFloat(2, 0, 999999.99),
                'created_at' => fake()->dateTimeBetween(),
                'updated_at' => fake()->dateTimeBetween()
            ]);
        }
    }
}
