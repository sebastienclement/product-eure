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
  public function showListCategories()
  {
    $categories = Category::all();
    return view('admin/list-categories', compact('categories'));
  }

  public function showNewCategory()
  {
    return view('admin/new-category');
  }

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

  public function showEditCategory($id)
  {
    $category = Category::FindOrFail($id);

    return view('admin/edit-category', compact('category'));
  }

  public function actionEditCategory(AdminCategoryRequest $request, $id)
  {
    $category = Category::FindOrFail($id);
    $category->update($request->all());
    return redirect()->route('dashboard')->with('success', 'Catégorie modifiée');
  }

  public function deleteCategory($id)
  {
    $category = Category::FindOrFail($id);
    $category->delete();
    return redirect()->route('dashboard')->with('success', 'Catégorie supprimée');
  }
}
