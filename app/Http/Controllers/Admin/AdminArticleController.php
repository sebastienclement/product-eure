<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Article;
use Auth;

class AdminArticleController extends Controller
{
  public function showListArticles()
  {
    // systeme de brouillon pour les articles ???
    // $articles = Article::where('statut', '=', 'actif')->paginate(5);
    return view('admin/list-articles', compact('articles'));
  }

  public function showNewArticle()
  {
    return view('admin/new-article');
  }

  public function actionNewArticle(ArticleRequest $request)
  {
    Article::create($request->all());
    return redirect()->route('dashboard')->with('success', 'Article créé');
  }

  public function showEditArticle($id)
  {
    $article = Article::FindOrFail($id);
    return view('admin/edit-article', compact('article'));
  }

  public function actionEditArticle(ArticleRequest $request, $id)
  {
    $article = Article::FindOrFail($id);
    return redirect()->route('dashboard')->with('success', 'Article modifié');
  }

  public function deleteArticle($id)
  {
    $article = Article::FindOrFail($id);
    $article->delete();
    return redirect()->route('dashboard')->with('success', 'Vous l\'avez supprimé');
  }
}
