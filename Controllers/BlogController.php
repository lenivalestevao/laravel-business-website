<?php

namespace App\Http\Controllers;

use App\Support\Blog;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        return view('blog.index', [
            'posts' => Blog::all(),
        ]);
    }

    public function show(string $slug): View
    {
        $post = Blog::find($slug);

        abort_if($post === null, 404);

        return view('blog.show', [
            'post' => $post,
            'related' => Blog::related($post),
        ]);
    }
}
