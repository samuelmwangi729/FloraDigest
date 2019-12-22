<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Repositories\NewsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\NewsTags;
use Auth;
use Session;
use App\Models\News;

class NewsController extends AppBaseController
{
    /** @var  NewsRepository */
    private $newsRepository;

    public function __construct(NewsRepository $newsRepo)
    {
        $this->newsRepository = $newsRepo;
    }

    /**
     * Display a listing of the News.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $news = $this->newsRepository->all();

        return view('news.index')
            ->with('news', $news);
    }
    public function Index1(Request $request)
    {
        $news = $this->newsRepository->all();

        return view('news.home')
            ->with('news', $news)
            ->with('tags',NewsTags::all()->take(10));
    }

    /**
     * Show the form for creating a new News.
     *
     * @return Response
     */
    public function create()
    {
        return view('news.create')->with('categories',NewsTags::all());
    }

    /**
     * Store a newly created News in storage.
     *
     * @param CreateNewsRequest $request
     *
     * @return Response
     */
    public function store(CreateNewsRequest $request)
    {
        $input = $request->all();
            //this renames the image since the user cant be trusted
        $image=$request->image;
        $newImageName=time().$image->getClientOriginalName();
        //upload the image 
        $image->move('uploads/news',$newImageName);
        // $news->image='uploads/news/'.$newImageName;

        $news = $this->newsRepository->create(
            [
                'title'=>$request->title,
                'slug'=>str_slug($request->title),
                'text'=>$request->text,
                'category_id'=>$request->category_id,
                'content'=>$request->content,
                'image'=>'uploads/news/'.$newImageName,
                'published_by'=>Auth::user()->name,
            ]
        );

        Session::flash('success','News Successfully Published');

        return redirect(route('news.index'));
    }

    /**
     * Display the specified News.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($slug)
    {
        $news =News::where('slug',$slug)->get()->first();

        if (empty($news)) {
            Flash::error('News not found');

            return redirect(route('news.index'));
        }

        return view('news.show')->with('news', $news);
    }

    /**
     * Show the form for editing the specified News.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($slug)
    {
        $news = News::where('slug',$slug)->get()->first();

        if (empty($news)) {
            Flash::error('News not found');

            return redirect(route('news.index'));
        }

        return view('news.edit')
        ->with('news', $news)
        ->with('tags',NewsTags::all());
    }

    /**
     * Update the specified News in storage.
     *
     * @param int $id
     * @param UpdateNewsRequest $request
     *
     * @return Response
     */
    public function update($slug, UpdateNewsRequest $request)
    {
        $news = News::where('slug',$slug)->get()->first();
        if (empty($news)) {
            Flash::error('News not found');

            return redirect(route('news.index'));
        }

        if($request->hasFile('image')){
            $image=$request->image;
            $newImageName=time().$image->getClientOriginalName();
            $image->move('uploads/news',$newImageName);
            $news->image='uploads/news/'.$newImageName;
        }
        $news->title=$request->title;
        $news->slug=str_slug($request->title);
        $news->text=$request->text;
        $news->content=$request->content;
        $news->edited_by=Auth::user()->name;
        $news->save();

        Session::flash('success','News Successfully Updated');

        return redirect(route('news.index'));
    }

    /**
     * Remove the specified News from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $news = $this->newsRepository->find($id);

        if (empty($news)) {
            Session::flash('error','News Not Found');

            return redirect(route('news.index'));
        }

        $this->newsRepository->delete($id);

        Session::flash('success','News Deleted');

        return redirect(route('news.index'));
    }
    public function deleted(){
        $trashed=News::onlyTrashed()->get()->all();
        if(empty($trashed)){
            Session::flash('error','No Trashed News');
            return redirect()->back();
        }
        return view('news.trashed')
        ->with('tnews',$trashed);
    }

    public function restore($slug){
        $news=News::onlyTrashed('slug',$slug)->get()->first();
        $news->restore();
        Session::flash('success','News Successfully Restored');
        return redirect()->route('news.index');
    }
    public function delete($slug){
        $news=News::onlyTrashed('slug',$slug)->get()->first();
        $news->forceDelete();
        Session::flash('success','News Permanently Deleted');
        return  redirect()->route('news.index');
    }
    public function singleNews($slug){
        $new=News::where('slug',$slug)->get()->first();
        if(is_null($new)){
            Session::flash('error','no way');
            return redirect()->back();
        }
        return view('news.single')->with('new',$new);
    }

    public function NewsTag($tag){
        $id=NewsTags::where('name',$tag)->get()->first()->id;
        $news=News::where('category_id',$id)->get()->all();
        if(count($news)==0){
            Session::flash('error','News Under Such Category are Unavailable');
            return redirect()->back();
        }
        return view('news.tags')->with('news',$news);
    }
}
