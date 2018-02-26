<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producer;
use App\Models\Category;
use App\Models\Item;
use App\Http\Requests\SearchRequest;

class SearchController extends Controller
{

    public function actionSearchForm(SearchRequest $request)
    {
        $request = $request->all();

        if(!empty($request['category']) && (!empty($request['search'])))
        {
          $category = $request['category'];
          $search = $request['search'];
          $producers = Producer::searchBoth($category,$search);
        }
        elseif(!empty($request['category'])){
          $category = $request['category'];
          $producers = Producer::searchCat($category);
        }
        elseif(!empty($request['search'])){
          $search = $request['search'];
          $producers = Producer::searchInput($search);
        }
          $countsearch = count($producers);

        return view('front/search',compact('producers','countsearch'));
      

    }


    public function actionSearchMap($zone)
    {
        $producers = Producer::where('zone', '=', $zone)->where('status', '=', 'confirmed')->get();
        $countsearch = count($producers);

        return view('front/search',compact('producers','countsearch'));
    }



    public function actionSearchCategory($category)
    {
        $category_id = Category::where('name','=', $category)->select('id')->first();
        $producers = Producer::searchCat($category_id->id);
        $countsearch = count($producers);

        return view('front/search',compact('producers','countsearch'));
    }

}
