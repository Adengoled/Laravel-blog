<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post extends Model
{
    use HasFactory;

    public $title;
    public $slug;
    public $excerpt;
    public $date;
    public $body;
    public function __construct ($title, $slug, $excerpt, $date, $body) {
        $this->title = $title;
        $this->slug = $slug;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
    }

    public static function getAll() {
        $files = File::files(resource_path("posts/"));

        return array_map(function ($file) {
            return $file->getContents();
        }, $files);
    }

    public static function find($slug) {

    if (! file_exists($path = resource_path("posts/{$slug}.html"))) {
        throw new ModelNotFoundException(); //best practices
    }

    return cache()->remember('posts.{$slug}', 3, fn () => file_get_contents($path));
    }
}
