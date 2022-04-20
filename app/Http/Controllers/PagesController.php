<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Article;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('home')->withTitle('home');
    }
    public function about(){
        return view('about')->withTitle('about');
    }
    public function contact(){
        return view('contact')->withTitle('contact');
    }
    public function posts(){
        $posts =Post::orderBy('id','desc')->paginate(3);
        return view('posts.index')->with('posts',$posts)->withTitle('Blog');  
    }
    public function articles(){
        $articles=Article::all();
        return view('articles.index')->with('articles',$articles)->withTitle('articles');
    }
    public function admin(){
        return view('admin.index')->withTitle('admin');
    }
}
