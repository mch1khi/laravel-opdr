<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blogs;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogsController extends Controller
{
    public function index()
    {
       
        $blogs = blogs::paginate(6);

        return view('blogs', [
            'blogs' => $blogs
        ]);
    }


public function viewCreate()
{
    return view('create');
}

public function viewblog(blog $blog)
{
    return view('blog', [
        'blog' => $blog
    ]);
}
}

