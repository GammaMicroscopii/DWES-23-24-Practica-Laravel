<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Address;
use App\Models\Order;
use App\Models\Client;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $addresses = Address::all()->pluck("id")->toArray();
        $clients = Client::inRandomOrder()->get();

        foreach($clients as $client) {
            Order::create([
                'address_id' => $addresses[array_rand($addresses)],
                'client_id' => $client->id,
                'fecha_pedido' => fake()->dateTimeBetween(),
                'created_at' => fake()->dateTimeBetween(),
                'updated_at' => fake()->dateTimeBetween()
            ]);
        }
    }
}
