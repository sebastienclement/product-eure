<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;

class CategoryController extends Controller
{
  /**
   * [showAllCategories description]
   * affiche toute les categories
   * @return [type] [description]
   */
  public function showAllCategories()
  {
    $categories = Category::all();

    return view('/front/list-categories',compact('categories'));
  }
}
