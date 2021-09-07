<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('posts', [
    //     'posts' => Post::getAll()
    // ]);

    $files = File::files(resource_path("posts")); //je haalt alle files uit de map "post"
    $posts = [];
    foreach ($files as $file) {
        $document = YamlFrontMatter::parseFile($file); //je loopt door alle files in de map en voor elke file haal je content en stop je ze in $document
        $posts[] = new Post(
            $document->title,
            $document->slug,
            $document->excerpt,
            $document->date,
            $document->body()
        ); //hier creeer je je posts volgens constructor (maak je objecten van class Post) en stop je ze in de array
    }; //end foreach

    return view('posts', [
        'posts' => $posts
    ]);

});

Route::get('posts/{post}', function ($slug) {
    //Find a post by its slug and pass it to a view called post
    return view('post', [
        'post' => Post::find($slug)
    ]);


})->where('post', '[A-z0-9_\-]+'); //restrictie zodat wildcard niet zomaar iets kan zijn
