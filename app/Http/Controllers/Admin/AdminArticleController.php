<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminArticleRequest;
use Illuminate\Http\Request;
use App\Service\PathUpload;
use Carbon\Carbon;
use App\Models\Article;
use Auth;

class AdminArticleController extends Controller
{
  /**
   * [showListArticles description
   * affiche la vue de la liste des articles]
   * @return [type] [description]
   */
  public function showListArticles()
  {
    // systeme de brouillon pour les articles ???
    // $articles = Article::where('statut', '=', 'actif')->paginate(5);
    $articles = Article::all();

    return view('admin/list-articles', compact('articles'));
  }

  /**
   * [showNewArticle description
   * affiche la vue du formulaire d'ajout d'un article]
   * @return [type] [description]
   */
  public function showNewArticle()
  {
    return view('admin/new-article');
  }

  /**
   * [newArticleAction description
   * validation du formulaire d'ajout d'article]
   * @param  AdminArticleRequest $request [description]
   * @return [type]                       [description]
   */
  public function newArticleAction(AdminArticleRequest $request)
  {
    if (!empty($request->file('image'))) {
      $path = new PathUpload($request->file('image'), 'articles');
      $request->file('image')->move(public_path($path->path()), $path->imageName());
      $image = $path->path().'/'.$path->imageName();
    } else {
      $image = 'img/icons/030-tree.svg';
    }

    $inputs = array_merge($request->all(),[
      'user_id' => Auth::id(),
      'path_img_article' => $image]);
    // dd($inputs);
    Article::create($inputs);

    return redirect()->route('dashboard')->with('success', 'Article créé');
  }

  /**
   * [showEditArticle description
   * affiche la vue pour modifier un article]
   * @param  [type] $id [description]
   * @return [type]     [description]
   */
  public function showEditArticle($id)
  {
    $article = Article::FindOrFail($id);

    return view('admin/edit-article', compact('article'));
  }

  /**
   * [actionEditArticle description
   * validation du formulaire de modification]
   * @param  AdminArticleRequest $request [description]
   * @param  [type]              $id      [description]
   * @return [type]                       [description]
   */
  public function actionEditArticle(AdminArticleRequest $request, $id )
  {
    if(!empty($request->file('image'))) {

      $path = new PathUpload($request->file('image'), 'producer');
      $request->file('image')->move(public_path($path->path()), $path->imageName());

      $post = $request->all();

      \DB::table('articles')->where('id',  $id )->update([
          'title'                   => $post['title'],
          'content'                 => $post['content'],
          'status'                  => $post['status'],
          'path_img_article'        => $path->path().'/'.$path->imageName(),
          'updated_at'  => Carbon::now(),
        ]);
    } else {

      $post = $request->all();

        \DB::table('articles')->where('id',  $id )->update([
          'title'                   => $post['title'],
          'content'                 => $post['content'],
          'status'                  => $post['status'],
          'updated_at'  => Carbon::now(),
        ]);
    }
    return redirect()->route('dashboard')->with('success', 'Article modifié');
  }

  /**
   * [deleteArticle description
   * effacement d'un article]
   * @param  [type] $id [description]
   * @return [type]     [description]
   */
  public function deleteArticle($id)
  {
    $article = Article::FindOrFail($id);
    $article->delete();
    return redirect()->route('dashboard')->with('success', 'Vous l\'avez supprimé');
  }
}
