<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model for inserting data into posts table

        $post = new Post;
        $post->title = 'Bandersnatch - Quem está no controle?';
        $post->name = 'bandersnatch';
        $post->description = "
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, perferendis
                    repudiandae cum, eius repellat architecto et delectus suscipit sunt porro
                    necessitatibus minus aspernatur impedit vero in debitis quisquam odio a.
        ";
        $post->content = "
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, perferendis
                    repudiandae cum, eius repellat architecto et delectus suscipit sunt porro
                    necessitatibus minus aspernatur impedit vero in debitis quisquam odio a.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, perferendis
                    repudiandae cum, eius repellat architecto et delectus suscipit sunt porro
                    necessitatibus minus aspernatur impedit vero in debitis quisquam odio a.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, perferendis
                    repudiandae cum, eius repellat architecto et delectus suscipit sunt porro
                    necessitatibus minus aspernatur impedit vero in debitis quisquam odio a.
        ";
        $post->isPublished = true;
        $post->save();

        $post = new Post;
        $post->title = 'Neon Genesis Evangelion - Ninguém me entende!';
        $post->name = 'evangelion';
        $post->description = "
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, perferendis
                    repudiandae cum, eius repellat architecto et delectus suscipit sunt porro
                    necessitatibus minus aspernatur impedit vero in debitis quisquam odio a.
        ";
        $post->content = "
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, perferendis
                    repudiandae cum, eius repellat architecto et delectus suscipit sunt porro
                    necessitatibus minus aspernatur impedit vero in debitis quisquam odio a.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, perferendis
                    repudiandae cum, eius repellat architecto et delectus suscipit sunt porro
                    necessitatibus minus aspernatur impedit vero in debitis quisquam odio a.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, perferendis
                    repudiandae cum, eius repellat architecto et delectus suscipit sunt porro
                    necessitatibus minus aspernatur impedit vero in debitis quisquam odio a.
        ";
        $post->isPublished = true;
        $post->save();

        $post = new Post;
        $post->title = 'Destinos de Minas - Diamantina';
        $post->name = 'destinos_diamantina';
        $post->description = "
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, perferendis
                    repudiandae cum, eius repellat architecto et delectus suscipit sunt porro
                    necessitatibus minus aspernatur impedit vero in debitis quisquam odio a.
        ";
        $post->content = "
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, perferendis
                    repudiandae cum, eius repellat architecto et delectus suscipit sunt porro
                    necessitatibus minus aspernatur impedit vero in debitis quisquam odio a.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, perferendis
                    repudiandae cum, eius repellat architecto et delectus suscipit sunt porro
                    necessitatibus minus aspernatur impedit vero in debitis quisquam odio a.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, perferendis
                    repudiandae cum, eius repellat architecto et delectus suscipit sunt porro
                    necessitatibus minus aspernatur impedit vero in debitis quisquam odio a.
        ";
        $post->isPublished = true;
        $post->save();

        $post = new Post;
        $post->title = 'Pseudociências - A ignorância é uma virtude?';
        $post->name = 'pseudociências';
        $post->description = "
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, perferendis
                    repudiandae cum, eius repellat architecto et delectus suscipit sunt porro
                    necessitatibus minus aspernatur impedit vero in debitis quisquam odio a.
        ";
        $post->content = "
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, perferendis
                    repudiandae cum, eius repellat architecto et delectus suscipit sunt porro
                    necessitatibus minus aspernatur impedit vero in debitis quisquam odio a.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, perferendis
                    repudiandae cum, eius repellat architecto et delectus suscipit sunt porro
                    necessitatibus minus aspernatur impedit vero in debitis quisquam odio a.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, perferendis
                    repudiandae cum, eius repellat architecto et delectus suscipit sunt porro
                    necessitatibus minus aspernatur impedit vero in debitis quisquam odio a.
        ";
        $post->isPublished = false;
        $post->save();
    }
}
