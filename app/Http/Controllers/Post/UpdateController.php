<?php

    namespace App\Http\Controllers\Post;

    use App\Http\Requests\Post\UpdateRequest;
    use App\Models\{Post};

    class UpdateController extends BaseController
    {
        public function __invoke(UpdateRequest $request, Post $post)
        {
            $post_data = $request->validated();
            $this->service->update($post,$post_data);

            return redirect(route('post.show', $post->id));
        }

    }
