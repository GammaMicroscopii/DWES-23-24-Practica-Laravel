<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class ArticleOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('article_order')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        $articles = Article::all()->pluck("id")->toArray();
        $orders = Order::inRandomOrder()->get();

        foreach($orders as $order) {
            DB::table('article_order')->insert([
                'article_id' => $articles[array_rand($articles)],
                'order_id' => $order->id,
                'cantidad' => fake()->numberBetween(1, 1000),
            ]);
        }
    }
}
