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

          $producers_id = \DB::table('producers')
                            ->join('category_producer','producers.id', '=','category_producer.producer_id')
                            ->where('category_producer.category_id', '=', $category)
                            ->join('item_producer','producers.id', '=', 'item_producer.producer_id')
                            ->join('items','items.id', '=', 'item_producer.item_id')
                            ->where(function($query) use ($search){
                                $query->where('items.name', 'like', '%' . $search . '%')
                                   ->orWhere('items.comment', 'like', '%' . $search . '%')

                                   ->orWhere('producers.adresse', 'like', '%' . $search . '%')
                                   ->orWhere('producers.description', 'like', '%' . $search . '%')
                                   ->orWhere('producers.zipcode', 'like', '%' . $search . '%');
                               })
                              ->select('*','producers.name as prod_name','producers.id as prod_id','items.name as item_name')
                            ->get();

             // dd($producers);

// }
          // $name_categories = Category::where('id','=', $category)->select('name')->get();

// dd($producers_id);
                  $producers_id = array_pluck($producers_id, 'prod_id');
                   // dd($producers_id);
                  if(!empty($producers_id)){
                      $producers = Producer::where('id', $producers_id)->get();
                  }else{
                      $producers = [];
                  }
// dd($producers);
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

          $producers_id = \DB::table('producers')
                        ->join('item_producer','producers.id', '=', 'item_producer.producer_id')
                        ->leftJoin('items','items.id', '=', 'item_producer.item_id')
                        ->where('items.name', 'like', '%' . $request['search'] . '%')
                        ->orWhere('items.comment', 'like', '%' . $request['search'] . '%')
                        ->select('*','producers.name as prod_name','producers.id as prod_id','items.name as item_name')
                        ->orWhere('producers.adresse', 'like', '%' . $request['search'] . '%')
                        ->orWhere('producers.description', 'like', '%' . $request['search'] . '%')
                        ->orWhere('producers.zipcode', 'like', '%' . $request['search'] . '%')
                        ->distinct()
                        ->get();
                 // dd($producers_id);

                        $producers_id = array_pluck($producers_id, 'prod_id');
                        // dd($producers_id);
                        if(!empty($producers_id)){
                            $producers = Producer::where('id', $producers_id)->get();
                        }else{
                            $producers = [];
                        }

        }else{
            return redirect()->route('home')->with('success', 'tss');
        }

           $countsearch = count($producers);

      return view('front/search',compact('producers','countsearch','name_categories'));
    }
}
