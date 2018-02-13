<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producer;
use App\Models\User;
use App\Models\Item;
use App\Models\Category;
use App\Models\Article;
use App\Models\Retail;

class AdminDashboardController extends Controller
{
    //Listing des producteurs
    //Lien vers leur produits->Admin Item Controller
    //Lien vers leurs profils->Admin Producer Controller

    public function dashboard()
    {
      // requete pour avoir details sur items -> $items
      // requete pour avoir details sur retail -> $retail
      // requete pour avoir details sur producer -> $producer
      $countusers = User::count();
      $countproducers = Producer::count();
      $countitems = Item::count();
      $countcategories = Category::count();
      $countarticles = Article::count();
      $countretails = Retail::count();

      return view('admin/dashboard', compact('countretails', 'countarticles','countproducers','countusers','countitems','countcategories'));
    }
}
