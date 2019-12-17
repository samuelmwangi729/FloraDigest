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
            ->with('posts', $posts);
    }

    /**
     * Show the form for creating a new Post.
     *
     * @return Response
     */
    public function create()
    {
        return view('posts.create')->with('categories',Category::all());
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
            'category_id'=>'required'
        ]);

        $image=$request->image;
        $newImageName=time().$image->getClientOriginalName();
        $image->move('uploads/posts',$newImageName);
        $input = $request->all();

        $post = $this->postRepository->create([
            'title'=> $request->title,
            'slug'=> str_slug($request->title),
            'text'=>$request->text,
            'content'=>$request->content,
            'image'=>'uploads/posts/'.$newImageName,
            'category_id'=>$request->category_id
        ]);

        // Flash::success('Post saved successfully.');
        Session::flash('success','Post Successfully saved');

        return redirect(route('posts.index'));
    }

    /**
     * Display the specified Post.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            Session::flash('error','Post not Found');

            return redirect(route('posts.index'));
        }

        return view('posts.show')->with([
            'post', $post,
            'categories',Category::all(),
        ]);
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

        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified Post in storage.
     *
     * @param int $id
     * @param UpdatePostRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePostRequest $request)
    {
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            Session::flash('error','Post Not Found');

            return redirect(route('posts.index'));
        }

        $post = $this->postRepository->update($request->all(), $id);
        Session::flash('success','Post Successfully updated');

        return redirect(route('posts.index'));
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

        return redirect(route('posts.index'));
    }
}
