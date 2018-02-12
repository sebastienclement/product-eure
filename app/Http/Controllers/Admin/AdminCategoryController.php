<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

  public function actionNewCategory(CategoryRequest $request)
  {
    Category::create($request->all());
    return redirect()->route('dashboard')->with('success', 'Catégorie créée');
  }

  public function showEditCategory()
  {
    $category = Category::FindOrFail($id);
    return view('admin/edit-category', compact('category'));
  }

  public function actionEditCategory(RetailRequest $request, $id)
  {
    $category = Category::FindOrFail($id);
    return redirect()->route('dashboard')->with('success', 'Catégorie modifiée');
  }

  public function deleteCategory($id)
  {
    $category = Category::FindOrFail($id);
    $category->delete();
    return redirect()->route('dashboard')->with('success', 'Catégorie supprimée');
  }
}
