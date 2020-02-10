<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Category;
use App\Tag;
use App\Models\News;
use App\Models\NewsTags;
use App\Models\Politics;
use App\Models\Topics;
use App\Models\Available;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $politics=Politics::orderBy('id','desc')->get()->take(1)->all();
        $latest=News::orderBy('id','desc')->get()->take(1)->all();
        $academia=Available::orderBy('id','desc')->get()->take(1);
        return view('welcome')
        ->with('politics',$politics)
        ->with('latest',$latest)
        ->with('proposal',$academia)
        ->with('topics',Topics::All()->take(11))
        ->with('post',Post::orderBy('id','desc')->take(1)->get());;
    }
}
