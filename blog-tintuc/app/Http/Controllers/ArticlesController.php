<?php

namespace App\Http\Controllers;
use App\Article;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleFormRequest;


class ArticlesController extends Controller
{
    public function index(){
        $articles = Article::all();
        return view('articles.index',compact('articles')); 
    }
    
    public function xxx(){
        return view('articles.xxx');
    }
    
    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show')-> with('article', $article) ;
    }
    public function create(){
        return view('articles.create');
    }
    public function store(ArticleFormRequest $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');
        Article::create([
            'title'=>$title,
            'content'=>$content
        ]);
        return redirect()->route('article.index');
    }
    public function edit($id){
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }
    public function update($id){
        dd("CHịu");
    }
}
