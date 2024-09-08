<?php

namespace App\Http\Controllers;
use App\Http\Requests\ArticleStore;
use App\Http\Requests\ArticleUpdate;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $articles = Article::all();
        return view('articles.create', ['article' => $articles]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleStore $request)
{
    $path_image = '';
    if ($request->hasFile('image')) {
        $name= $request->file('image')->getClientOriginalName();
        $path_image= $request->file('image')->storeAs('public/images',$name);
    }
    
        Article::create([
            'title' => $request->title,
            'description'=> $request->description,
            'years'=> $request->years,
            'image' => $path_image,
        ]);

return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article] );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article] );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleUpdate $request, Article $article)
    {
        $path_image = '';
        if ($request->hasFile('image')) {
            $name= $request->file('image')->getClientOriginalName();
            $path_image= $request->file('image')->storeAs('public/images',$name);
        }
        
            Article::create([
                'title' => $request->title,
                'description'=> $request->description,
                'years'=> $request->years,
                'image' => $path_image,
            ]);
    
    return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        return view('articles.destroy', ['article' => $article] );
    }
}
