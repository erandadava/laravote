<?php

use Illuminate\Database\Seeder;
use App\Post;

class CreateDummyPost extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $posts = ['ItSolutionStuff.com', 'Webprofile.me', 'HDTuto.com', 'Nicesnippets.com'];

        foreach ($posts as $key => $value) {
        	Post::create(['title'=>$value]);
        }
    }
}
