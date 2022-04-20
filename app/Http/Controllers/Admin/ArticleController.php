<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){
        $article= new Article;
        $table = $article->getTable();
        $columns  = \Schema::getColumnListing($table);
        return view('admin.Articles.index',['rows' =>Article::all(),'columns'=>$columns],)->withTitle('Articles');
    }
    
}
