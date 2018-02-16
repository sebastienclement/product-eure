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
                       ->select('*','producers.name as prod_name')
                       ->orWhere('producers.adresse', 'like', '%' . $request['search'] . '%')
                       ->orWhere('producers.description', 'like', '%' . $request['search'] . '%')
                       ->orWhere('producers.zipcode', 'like', '%' . $request['search'] . '%')
                       ->get();



        }elseif(!empty($request['category']))
        {
          $category = $request['category'];

          $producers = \DB::table('producers')
                        ->join('category_producer','producers.id', '=','category_producer.producer_id')
                        ->where('category_producer.category_id', '=', $category)
                        ->get();

        }elseif(!empty($request['search']))
        {
          $search = $request['search'];

          $producers = \DB::table('producers')
                        ->join('item_producer','producers.id', '=', 'item_producer.producer_id')
                        ->join('items','items.id', '=', 'item_producer.item_id')
                        ->where('items.name', 'like', '%' . $request['search'] . '%')
                        ->orWhere('items.comment', 'like', '%' . $request['search'] . '%')
                        ->select('*','producers.name as prod_name')
                        ->orWhere('producers.adresse', 'like', '%' . $request['search'] . '%')
                        ->orWhere('producers.description', 'like', '%' . $request['search'] . '%')
                        ->orWhere('producers.zipcode', 'like', '%' . $request['search'] . '%')
                        ->get();

        }
            dd($producers);

        // $search['prodwith'] = Producer::with('category')
        //             ->whereId($request['category'])
        //             ->get();
        // $search['prod'] = Producer::with('item')
        //                     ->where('name', 'like', '%' . $request['search'] . '%')
        //                     ->orWhere('adresse', 'like', '%' . $request['search'] . '%')
        //                     ->orWhere('description', 'like', '%' . $request['search'] . '%')
        //                     ->get();
        // $search['item'] = Item::with('producer')
        //                       ->where('name', 'like', '%' . $request['search'] . '%')
        //                       ->orWhere('comment', 'like', '%' . $request['search'] . '%')
        //                       ->get();

      return view('front/search',compact('producers','request','search'));
    }
}
