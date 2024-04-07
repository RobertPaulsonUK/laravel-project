<?php

    namespace App\Http\Controllers;

    use App\Models\{Post,Category,Tag,PostTag};

    use Illuminate\Http\Request;

    class PostController extends Controller
    {
        public function index()
        {
            $posts = Post::all();
            return view('post.index', compact('posts'));
        }

        public function create()
        {
            $categories = Category::all();
            $tags = Tag::all();
            return view('post.create',compact('categories','tags'));
        }

        public function store()
        {
            $data = request()->validate([
                'title'   => 'required|string',
                'content' => 'required|string',
                'image'   => 'required|string',
                'likes'   => 'required|string',
                'category_id' => '',
                'tags' => ''
            ]);
            $tags = $data['tags'];
            unset($data['tags']);

            $post = Post::create($data);
            $post->tags()->attach($tags);
            return redirect(route('post.index'));
        }

        public function show(Post $post)
        {
            $category = Category::find($post->category_id);

            $tags = $post->tags;
            return view('post.show', compact('post','category','tags'));
        }



        public function edit(Post $post)
        {
            $categories = Category::all();
            $post_tags = $post->tags;
            $all_tags = Tag::all();
            $post_tags_id = [];
            foreach ($post_tags as $post_tag) {
                array_push($post_tags_id,$post_tag->id);
            }

            return view('post.edit', compact('post','categories','post_tags_id','all_tags'));
        }

        public function update(Post $post)
        {
            $post_data = request()->validate([
                'title'   => 'string',
                'content' => 'string',
                'image'   => 'string',
                'likes'   => 'string',
                'category_id' => '',
                'tags' => ''

            ]);
            $tags = $post_data['tags'];
            unset($post_data['tags']);

            $post->update($post_data);
            $post->tags()->sync($tags);
            return redirect(route('post.show', $post->id));
        }

        public function destroy(Post $post)
        {
            $post->delete();

            return redirect(route('post.index'));
        }


    }
