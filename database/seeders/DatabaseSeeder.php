<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        Post::factory()->create();  //hier zijn factories Category en User al ingebed in Post factory, dus met deze lijn worden ze allemaal aangeroepen

        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name' => "Personal",
        //     'slug' => "personal"
        // ]);

        // $family = Category::create([
        //     'name' => "Family",
        //     'slug' => "family"
        // ]);

        // $hobbies = Category::create([
        //     'name' => "Hobbies",
        //     'slug' => "hobbies"
        // ]);

        // Post::create ([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My family post',
        //     'excerpt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'
        // ]);

        // Post::create ([
        //     'user_id' => $user->id,
        //     'category_id' => $hobbies->id,
        //     'title' => 'My hobbies post',
        //     'excerpt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit<p>',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'
        // ]);
    }
}
