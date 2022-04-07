<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Catégorie;
use App\Models\Article;


class evitrineController extends Controller
{
    public function index()
    {
        $catégories = Catégorie::all();
        //----- systeme de pagination -------
        $articles = Article::paginate(4);
        return view('evitrine' , compact('catégories', 'articles'));
    }
    public function articles($id)
    {
        $articles = Catégorie::find($id)->articles;
        $catégories = Catégorie::all();
        return view('catVitrine' , compact('articles' , 'catégories'));
    }
    public function detail($id)
    {
        $article = Article::find($id);
        $catégories = Catégorie::all();
        return view('detail',compact('article' , 'catégories'));
    }
}