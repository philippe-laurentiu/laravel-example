<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post {

  public $title;

  public $date;

  public $slug;

  public $body;

  public function __construct($title, $date, $slug, $body)
  {
    $this->title = $title;
    $this->date = $date;
    $this->slug = $slug;
    $this->body = $body;
  }


  public static function find($slug) {

    $posts = static::all();
    $post = $posts->firstWhere('slug', $slug);
    return $post;
    // return cache()->remember('post.{$slug}', 5, fn() => file_get_contents($path));
  }



  public static function all() {
    return cache()->remember('post.all', 5, function () {
      return Collect(File::files(resource_path("posts")))
      ->map( function ($file) {
          return YamlFrontMatter::parse(file_get_contents($file));
      })
      ->map( function ($document) {
          return new Post($document->title, $document->date,  $document->slug, $document->body());
      })->sortByDesc('date');
    });
  }
}