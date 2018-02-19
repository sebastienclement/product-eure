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
                                    ->orWhere('producers.name', 'like', '%' . $search . '%')
                                    ->orWhere('producers.adresse', 'like', '%' . $search . '%')
                                    ->orWhere('producers.zipcode', 'like', '%' . $search . '%');
                               })
                              ->select('producers.id as prod_id')
                            ->get();

        }

          $producers_id = array_pluck($producers_id, 'prod_id');

                if(!empty($producers_id)){
                    $producers = Producer::whereIn('id', $producers_id)->with('category')->get();
                }else{
                    $producers = [];
                }

        }elseif(!empty($request['category']))
        {
          $category = $request['category'];

           $producers_id =
           \DB::table('producers')
                        ->join('category_producer','producers.id', '=','category_producer.producer_id')
                        ->where('category_producer.category_id', '=', $category)
                        ->join('categories','category_producer.category_id' ,'=','categories.id')
                        ->select('producers.id')
                        ->get();

                        $producers_id = array_pluck($producers_id, 'id');
                        $producers = Producer::with('category')->whereIn('id',  $producers_id)->get();



        }elseif(!empty($request['search']))
        {
          $search = $request['search'];

          $producers_id = \DB::table('producers')
                        ->join('item_producer','producers.id', '=', 'item_producer.producer_id')
                        ->leftJoin('items','items.id', '=', 'item_producer.item_id')
                        ->where('items.name', 'like', '%' . $request['search'] . '%')
                        ->orWhere('items.comment', 'like', '%' . $request['search'] . '%')
                        ->orWhere('producers.name', 'like', '%' . $request['search'] . '%')
                        ->orWhere('producers.adresse', 'like', '%' . $request['search'] . '%')
                        ->orWhere('producers.ville', 'like', '%' . $request['search'] . '%')
                        ->orWhere('producers.zipcode', 'like', '%' . $request['search'] . '%')
                        ->select('producers.id as prod_id')
                        ->get();


                        $producers_id = array_pluck($producers_id, 'prod_id');
                        // dd($producers_id);
                        if(!empty($producers_id)){
                            $producers = Producer::whereIn('id', $producers_id)->with('category')->get();
                        }else{
                            $producers = [];
                        }
                        // dd($producers);
        }else{
            return redirect()->route('home')->with('success', 'tss');
        }

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
