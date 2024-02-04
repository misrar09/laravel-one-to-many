<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            [

                'title' => 'First Article',
                'description' => 'This is the first articles description',
                'conclusion' => 'This is the conclusion of the first article'
            ],
            [
                'title' => 'Second Article',
                'description' => 'This is the second articles description',
                'conclusion' => 'This is the conclusion of the second article'
            ],
            [
                'title' => 'Third Article',
                'description' => 'This is the third articles description',
                'conclusion' => 'This is the conclusion of the third article'
            ],

        ];

        foreach ($articles as $article) {
            $newArticle = new Article();
            $newArticle->fill($article);
            $newArticle->save();
        }
    }
}
