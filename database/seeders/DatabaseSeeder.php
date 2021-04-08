<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Article::create(
            [
                'description'  => 'The colour is YELLOW',
                'group_id' => 1,
            ]
        );

        Article::create(
            [
                'description'  => 'The colour is BLUE',
                'group_id' => 1,
            ]
        );

        Article::create(
            [
                'description'  => 'The colour is GREEN',
                'group_id' => 1,
            ]
        );

        Article::create(
            [
                'description'  => 'The colour is ORANGE',
                'group_id' => 1,
            ]
        );

        Article::create(
            [
                'description'  => 'The colour is PINK',
                'group_id' => 1,
            ]
        );

        Article::create(
            [
                'description'  => 'The colour is YELLOW',
                'group_id' => 2,
            ]
        );

        Article::create(
            [
                'description'  => 'The colour is GREEN',
                'group_id' => 2,
            ]
        );

        Article::create(
            [
                'description'  => 'The colour is PURPLE',
                'group_id' => 2,
            ]
        );

    }
}
