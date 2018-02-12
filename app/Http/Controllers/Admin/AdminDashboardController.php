<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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


      return view('admin/dashboard', compact('item', 'retail', 'producer'));
    }
}
