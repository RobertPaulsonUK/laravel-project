<?php

    namespace App\Services\Post;

    use App\Models\Post;

    class Service
    {
        public function store($data) {
            $tags = $data['tags'];
            unset($data['tags']);

            $post = Post::create($data);
            $post->tags()->attach($tags);

        }
        public function update($post,$post_data) {
            $tags = $post_data['tags'];
            unset($post_data['tags']);

            $post->update($post_data);
            $post->tags()->sync($tags);
        }
    }
