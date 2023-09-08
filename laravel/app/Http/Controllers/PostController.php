<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index()
    {
        $orders = config('const.ORDERS');
        foreach (array_keys($orders) as $order_en) {
            $posts[$order_en] = Post::latest($order_en)->get();
        }

        return view('index')->with(['posts' => $posts]);
    }

    public function text($id)
    {
        $post = Post::findOrFail($id);
        $post->cmts = count($post->comments);
        $post->save();

        return view('posts/text')->with(['post' => $post]);
    }

    public function create()
    {
        return view('posts/create');
    }

    public function store(PostRequest $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->detail = $request->detail;
        $post->save();

        return redirect()->route('index.posts');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('posts/edit')->with(['post' => $post]);
    }

    public function update(PostRequest $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->detail = $request->detail;
        $post->save();

        return redirect()->route('text.posts', $post->id);
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('index.posts');
    }

    public function search(Request $request)
    {
        $keywords = array_filter(
            explode(' ', $request->keywords),
            function ($keyword) {return $keyword != '';}
        );
        $orders = config('const.ORDERS');
        foreach (array_keys($orders) as $order_en) {
            $query = Post::query();
            foreach ($keywords as $keyword) {
                $query->where('title', 'LIKE', '%'.$keyword.'%');
            }
            $posts[$order_en] = empty($keywords) ? []
                : $query->latest($order_en)->get();
        }

        return view('posts/search')->with(['posts' => $posts]);
    }

    public function like($id)
    {
        $post = Post::findOrFail($id);
        $post->timestamps = false;
        $post->increment('likes');

        return redirect()->route('text.posts', $post->id);
    }
}
