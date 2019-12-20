<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Category;
use App\Tag;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all()->count();
        $categories=Category::all()->count();
        $tags=Tag::all()->count();
        return view('home')
        ->with('posts',$posts)
        ->with('categories',$categories)
        ->with('tags',$tags)
        ->with('users',User::all()->count())
        ->with('trashed',Post::onlyTrashed()->get()->count()
    );
    }
}
