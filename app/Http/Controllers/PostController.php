<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Repositories\PostRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Session;
use App\Category;
use App\Post;
use App\Tag;
use Auth;

class PostController extends AppBaseController
{
    /** @var  PostRepository */
    private $postRepository;

    public function __construct(PostRepository $postRepo)
    {
        $this->postRepository = $postRepo;
    }

    /**
     * Display a listing of the Post.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $posts = $this->postRepository->all();

        return view('posts.index')
            ->with('posts', Post::orderBy('id','desc')->take(4)->get())
            ->with('first_post',Post::orderBy('id','desc')->take(1)->get());
    }

    /**
     * Show the form for creating a new Post.
     *
     * @return Response
     */
    public function create()
    {
        return view('posts.create')->with('categories',Category::all())->with('tag',Tag::all());
    }

    /**
     * Store a newly created Post in storage.
     *
     * @param CreatePostRequest $request
     *
     * @return Response
     */
    public function store(CreatePostRequest $request)
    {
        // dd($request->image);

        $this->validate($request,[
            'title'=>'required|max:255',
            'text'=>'required|max:255',
            'content'=>'required',
            'image'=>'required|image',
            'category_id'=>'required',
            'tags'=>'required'
        ]);

        $image=$request->image;
        $newImageName=time().$image->getClientOriginalName();
        $image->move('uploads/posts',$newImageName);
        $input = $request->all();
        $post=Post::create([
            'title'=> $request->title,
            'slug'=> str_slug($request->title),
            'text'=>$request->text,
            'content'=>$request->content,
            'category_id'=>$request->category_id,
            'image'=>'uploads/posts/'.$newImageName,
            'published_by'=>Auth::user()->name,
            
        ]);
        $post->tags()->attach($request->tags);
        // Flash::success('Post saved successfully.');
        Session::flash('success','Post Successfully saved');

        return redirect(route('index'));
    }

    /**
     * Display the specified Post.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($slug)
    {
        $post = $this->postRepository->find($slug);

        if (empty($post)) {
            Session::flash('error','Post not Found');

            return redirect(route('posts.index'));
        }

        return view('blog.post.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified Post.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $post = $this->postRepository->find($id);
        if (empty($post)) {
            Session::flash('error','Post Not Found');

            return redirect(route('posts.index'));
        }

        return view('blog.post.edit')
        ->with('post', $post)
        ->with('categories',Category::all())
        ->with('tags',Tag::all());
    }


    public function singlePost($slug){
        $post=Post::where('slug',$slug)->first();
        return view('blog.post.single')->with('post',$post);
    }

    /**
     * Update the specified Post in storage.
     *
     * @param int $id
     * @param UpdatePostRequest $request
     *
     * @return Response
     */
    public function Update($id, UpdatePostRequest $request)
    {   
        $this->validate($request,[
            'title'=>'required',
            'text'=>'required',
            'content'=>'required',
            'category_id'=>'required',
            'image'=>'required'
        ]);
        $post=Post::find($id);

        if(empty($post)){
            Session::flash('error','Post Not Found');
        }

        
        if($request->hasFile('image')){
            $image=$request->file('image');
            $newImageName=time().$image->getClientOriginalName();
            $image->move('uploads/posts',$newImageName);
            $post->image='uploads/posts/'.$newImageName;
        }

        $post->title=$request->title;
        $post->slug=str_slug($request->title);
        $post->text=$request->text;
        $post->content=$request->content;
        $post->category_id=$request->category_id;
        $post->save();
        $post->tags()->sync($request->tags);
        Session::flash('success','The post has been Updated');
        return redirect()->route('posts.view');
        // return response($newImageName);
    }

    /**
     * Remove the specified Post from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            Flash::error('Post not found');
            Session::flash('success','Post Not Found ');

            return redirect(route('posts.index'));
        }

        $this->postRepository->delete($id);
        Session::flash('success','Post Successfully Deleted');

        return redirect()->back();
    }
    public function trashed(){
        $post=Post::onlyTrashed()->get()->all();
        if(empty($post)){
            Session::flash('error','No Trashed Posts');
            return redirect()->back();
        }
        return view('blog.post.trashed')->with('posts',$post);
    }
    public function restore(Request $request){
        $post=Post::withTrashed()->where('id',$request->id)->first();
        $post->restore();
        Session::flash('success','Post Successfully Restored');
        return redirect()->back();
    }
    public function view(Request $request)
    {
        $posts = $this->postRepository->all();

        return view('blog.post.index')
            ->with('posts', Post::all());
    }
}
