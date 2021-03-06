<?php

use Illuminate\Database\Seeder;
use App\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post;
        app()->setLocale('en');
        $post->title = 'Awesome Translated Post!';
        $post->content = 'Hello World! It works!!';
        $post->save();

        app()->setLocale('fr');
        $post->title = 'Super Article traduit en français!';
        $post->content = 'Bonjour le monde! Ca fonctionne bien !!';
        $post->save();
    }
    
}