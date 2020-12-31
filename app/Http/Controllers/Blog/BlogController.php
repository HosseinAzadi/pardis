<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog.blog');
    }

    public function show($id)
    {
        return view('blog.show');
    }

    public function categories()
    {
        return view('blog.categories');
    }

    public function search()
    {
        return view('blog.search');
    }
}
