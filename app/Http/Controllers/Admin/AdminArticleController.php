<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminArticleRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Article;
use Auth;

class AdminArticleController extends Controller
{
  public function showListArticles()
  {
    // systeme de brouillon pour les articles ???
    // $articles = Article::where('statut', '=', 'actif')->paginate(5);
    $articles = Article::all();

    return view('admin/list-articles', compact('articles'));
  }

  public function showNewArticle()
  {
    return view('admin/new-article');
  }

  public function newArticleAction(AdminArticleRequest $request)
  {
    $inputs = array_merge($request->all(),['user_id' => Auth::id()]);
    // dd($inputs);
    Article::create($inputs);

    return redirect()->route('dashboard')->with('success', 'Article créé');
  }

  public function showEditArticle($id)
  {
    $article = Article::FindOrFail($id);

    return view('admin/edit-article', compact('article'));
  }

  public function actionEditArticle(AdminArticleRequest $request, $id )
  {

    $post = $request->all();

    \DB::table('articles')->where('id',  $id )->update([
        'title'       => $post['title'],
        'content'     => $post['content'],
        'status'      => $post['status'],
        'updated_at'  => Carbon::now(),
    ]);

    return redirect()->route('dashboard')->with('success', 'Article modifié');
  }

  public function deleteArticle($id)
  {
    $article = Article::FindOrFail($id);
    $article->delete();
    return redirect()->route('dashboard')->with('success', 'Vous l\'avez supprimé');
  }
}
