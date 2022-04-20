<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use Redirect;
use Cviebrock\EloquentSluggable\scr\Services\SlugService;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create')->withTitle('new Article');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleRequest $request)
    { 
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
 
        $insert = [
            'user_id'=>1,
            'title' => $request->title,
            'slug' => $request->title,//SlugService::createSlug(Article::class, 'slug', $request->title),
            'body' => $request->body,
        ];
   
        Article::insertGetId($insert);
        
        /* $article=new Article;
        $article->user_id=1;
        $article->title=$request->title;
        $article->slug = SlugService::createSlug(Article::class, 'slug', $request->title);
        $article->body=$request->body;
        $article->save(); */

        return Redirect::to('admin/articles/index')
        ->with('success','Greate! Article created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $article=Article::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $article=Article::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticleRequest  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article=Article::find($id);
        $article->delete();
        return back()->with('alert', 'IT WORKS!');
    }
}
