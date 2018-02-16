<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producer;
use App\Models\Category;

class SearchController extends Controller
{
    public function actionSearchForm(Request $request)
    {
        $request = $request->all();
        $producers = Producer::with('category')
                  ->where('')
                  ->get();

      return view('front/search',compact('producers','request'));
    }
}
