<?php

namespace App\Http\Controllers;
use App\Models\Blog;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public Function index()
    {
        $allBloggers = Blog::all();
        $randomBloggers = Blog::inRandomOrder()->take(4)->get();

        return view('blog',[
            'maintitle' => 'Home',
            'allBloggers' => $allBloggers,
            'latestPosts' => $randomBloggers,
        ]);
    }

    public function show(Blog $blog){
        $randomBloggers = Blog::inRandomOrder()->take(4)->get();
        return view('show.showBlog',[
            'maintitle' => 'Show '.$blog->title,
            'post' => $blog,
            // 'posts' => $blog::paginate(5)
            'posts' => $blog::all(),
            'latestPosts' => $randomBloggers,
        ]);
    }
}
