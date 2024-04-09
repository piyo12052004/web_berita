<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class SeachController extends Controller
{
    public function search()
        {
                $posts = Blog::latest();
                if(request('search')){
                            $posts->Where('content', 'LIKE', '%'.request('search') . '%')
                            ->orWhere('category', 'LIKE', '%'.request('search') . '%')
                            ->orWhere('title', 'LIKE', '%'.request('search') . '%');
                }
            return view('search.searchBlog',[
                'maintitle' => ''.request('search'),
                'posts' => $posts->get(),
            ]);
        }
}
