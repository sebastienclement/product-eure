<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producer;
use App\Models\Category;
use App\Models\Item;

class SearchController extends Controller
{
    public function actionSearchForm(Request $request)
    {
        $request = $request->all();

        if(!empty($request['category']) && (!empty($request['search'])))
        {
          $category = $request['category'];
          $search = $request['search'];

          $producers = \DB::table('producers')
                       ->join('category_producer','producers.id', '=','category_producer.producer_id')
                       ->where('category_producer.category_id', '=', $category)
                       ->join('item_producer','producers.id', '=', 'item_producer.producer_id')
                       ->join('items','items.id', '=', 'item_producer.item_id')
                       ->where('items.name', 'like', '%' . $request['search'] . '%')
                       ->orWhere('items.comment', 'like', '%' . $request['search'] . '%')
                       ->select('*','producers.name as prod_name','items.name as item_name')
                       ->orWhere('producers.adresse', 'like', '%' . $request['search'] . '%')
                       ->orWhere('producers.description', 'like', '%' . $request['search'] . '%')
                       ->orWhere('producers.zipcode', 'like', '%' . $request['search'] . '%')
                       ->get();

          $name_categories = Category::where('id','=', $category)->select('name')->get();

        }elseif(!empty($request['category']))
        {
          $category = $request['category'];

          $producers = \DB::table('producers')
                        ->join('category_producer','producers.id', '=','category_producer.producer_id')
                        ->where('category_producer.category_id', '=', $category)
                        ->join('categories','category_producer.category_id' ,'=','categories.id')
                        ->select('*','producers.name as prod_name','categories.name as cat')
                        ->get();

          $name_categories = Category::where('id','=', $category)->select('name')->get();

        }elseif(!empty($request['search']))
        {
          $search = $request['search'];

          $producers = \DB::table('producers')
                        ->join('item_producer','producers.id', '=', 'item_producer.producer_id')
                        ->join('items','items.id', '=', 'item_producer.item_id')
                        ->where('items.name', 'like', '%' . $request['search'] . '%')
                        ->orWhere('items.comment', 'like', '%' . $request['search'] . '%')
                        ->select('*','producers.name as prod_name','items.name as item_name')
                        ->orWhere('producers.adresse', 'like', '%' . $request['search'] . '%')
                        ->orWhere('producers.description', 'like', '%' . $request['search'] . '%')
                        ->orWhere('producers.zipcode', 'like', '%' . $request['search'] . '%')
                        ->get();

          //   foreach ($producers as $producer) {
          //       $cat_id = $producer->category_id;
          //   }
          //
          // $name_categories = Category::where('id','=', $cat_id)->select('name')->get();

        }else{
            return redirect()->route('home')->with('success', 'tss');
        }
             // dd($producers);
           $countsearch = count($producers);

      return view('front/search',compact('producers','countsearch','name_categories'));
    }

    public function actionSearchMap($zone)
    {
      $producers = Producer::where('zone', '=', $zone)->get();
      $countsearch = count($producers);
      // dd($producers);
      return view('front/search',compact('producers','countsearch'));
    }
}
