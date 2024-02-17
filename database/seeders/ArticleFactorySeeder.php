<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Article;
use App\Models\Factory;

class ArticleFactorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('article_factory')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        $articles = Article::all()->pluck("id")->toArray();
        $factories = Factory::inRandomOrder()->get();

        foreach($factories as $factory) {
            DB::table('article_factory')->insert([
                'article_id' => $articles[array_rand($articles)],
                'factory_id' => $factory->id,
                'existencias' => fake()->numberBetween(1, 100000),
            ]);
        }
    }
}
