<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminCategoryRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Category;
use Auth;

class AdminCategoryController extends Controller
{
  /**
   * [showListCategories description]
   * affiche la vue de la liste des categories
   * @return [type] [description]
   */
  public function showListCategories()
  {
    $categories = Category::all();
    return view('admin/list-categories', compact('categories'));
  }

  /**
   * [showNewCategory description]
   * affiche la vue du formulaire d'ajout de catégories
   * @return [type] [description]
   */
  public function showNewCategory()
  {
    return view('admin/new-category');
  }

  /**
   * [actionNewCategory
   * validation du formulaire d'ajout de catégories]
   * @param  AdminCategoryRequest $request [description]
   * @return [type]                        [description]
   */
  public function actionNewCategory(AdminCategoryRequest $request)
  {
    // Category::create($request->all());
    $post = $request->all();

    \DB::table('categories')->insert([
        'name'        => $post['name'],
        'created_at'  => Carbon::now(),
    ]);
    return redirect()->route('dashboard')->with('success', 'Catégorie créée');
  }

  /**
   * [showEditCategory description
   * affiche la vue pour modifier une catégories]
   * @param  [type] $id [description]
   * @return [type]     [description]
   */
  public function showEditCategory($id)
  {
    $category = Category::FindOrFail($id);

    return view('admin/edit-category', compact('category'));
  }

  /**
   * [actionEditCategory description
   * validation du formulaire de modification]
   * @param  AdminCategoryRequest $request [description]
   * @param  [type]               $id      [description]
   * @return [type]                        [description]
   */
  public function actionEditCategory(AdminCategoryRequest $request, $id)
  {
    $category = Category::FindOrFail($id);
    $category->update($request->all());
    return redirect()->route('dashboard')->with('success', 'Catégorie modifiée');
  }
  /**
   * [deleteCategory description
   * effacement d'une catégories]
   * @param  [type] $id [description]
   * @return [type]     [description]
   */
  public function deleteCategory($id)
  {
    $category = Category::FindOrFail($id);
    $category->delete();
    return redirect()->route('dashboard')->with('success', 'Catégorie supprimée');
  }
}
