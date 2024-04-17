<?php

    namespace App\Http\Controllers\Admin\Post;
    use App\Http\Controllers\Controller;
    use App\Models\{Category, Post, Tag};

    class EditController extends Controller
    {

        public function __invoke(Post $post)
        {
            $categories = Category::all();
            $post_tags = $post->tags;
            $all_tags = Tag::all();
            $post_tags_id = [];
            foreach ($post_tags as $post_tag) {
                array_push($post_tags_id,$post_tag->id);
            }

            return view('admin.post.edit', compact('post','categories','post_tags_id','all_tags'));
        }

    }
