<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Category;
use App\Tag;
use App\Models\News;
use App\Models\NewsTags;
use App\Models\Politics;
use Session;
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
        ->with('trashed',Post::onlyTrashed()->get()->count())
        ->with('news',News::all()->count())
        ->with('tnews',News::onlyTrashed()->count())
        ->with('blogger',User::where('level','blogger')->count())
        ->with('politics',Politics::all()->count());
    }
    public function users(){
        return view('users')->with('users',User::all());
    }
    public function suspend($id){
        $user=User::where('id',$id)->get()->first();
        if($user->count()==0){
            Session::flash('error','User Not Found');
            return back();
        }else{
            $user->status=0;
            $user->save();
            Session::flash('error','User suspended');
            return redirect()->back();
        }
    }
    public function reinstate($id){
        $user=User::where('id',$id)->get()->first();
        if($user->count()==0){
            Session::flash('error','User Not Found');
            return back();
        }else{
            $user->status=1;
            $user->save();
            Session::flash('success','User Active');
            return redirect()->back();
        }
    }
}
