<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Gate;

class PostController extends Controller
{
    public function createPost(Request $request)
    {
        $post = new Post($this->dataFromRequest($request));
        $post->save();
        return redirect('/');
    }

    public function showEditScreen(Post $post)
    {
        Gate::authorize('update', $post);
        return view('edit-post', ['post' => $post]);
    }

    public function updatePost(Post $post, Request $request)
    {
        Gate::authorize('update', $post);
        $requestData = $this->dataFromRequest($request);
        $post->update($requestData);
        return redirect('/');
    }

    public function deletePost(Post $post)
    {
        Gate::authorize('delete', $post);
        $post->delete();
        return redirect('/');
    }

    private function dataFromRequest(Request $request): array
    {
        $incomingFields = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        return [
            'title' => strip_tags($incomingFields['title']),
            'content' => strip_tags($incomingFields['content']),
            'user_id' => Auth::id(),
        ];
    }
}
