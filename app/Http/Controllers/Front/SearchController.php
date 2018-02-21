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


    // Requete de recherche en 3 temps.
    // 1-On recherche lorsque les deux champs sont utilisés.

        if(!empty($request['category']) && (!empty($request['search'])))
        {
          $category = $request['category'];
          $search = $request['search'];

            //requete pour obtenir l'id des producteurs correspondant

          $producers_id = \DB::table('producers')
                            ->join('category_producer','producers.id', '=','category_producer.producer_id')
                            ->where('category_producer.category_id', '=', $category)
                            ->join('item_producer','producers.id', '=', 'item_producer.producer_id')
                            ->join('items','items.id', '=', 'item_producer.item_id')
                            ->where(function($query) use ($search){
                                $query->where('items.comment', 'like', '%' . $search . '%')
                                    ->orWhere('producers.name', 'like', '%' . $search . '%')
                                    ->orWhere('producers.adresse', 'like', '%' . $search . '%')
                                    ->orWhere('producers.zipcode', 'like', '%' . $search . '%');
                               })
                              ->select('producers.id as prod_id')
                            ->get();

            //On crée un tableau avec les ids récupérés
            //Dont on se sert pour récupérer les informations des producteur correspondant

          $producers_id = array_pluck($producers_id, 'prod_id');

                if(!empty($producers_id)){
                    $producers = Producer::whereIn('id', $producers_id)->with('category')->get();
                }else{
                    $producers = [];
                }

    //  2-On recherche lorsque juste la catégorie est renseigné
    //  Selon le meme fonctionnement que précedemment.

        }elseif(!empty($request['category']))
        {
            $category = $request['category'];

            $producers_id = \DB::table('producers')
                            ->join('category_producer','producers.id', '=','category_producer.producer_id')
                            ->where('category_producer.category_id', '=', $category)
                            ->join('categories','category_producer.category_id' ,'=','categories.id')
                            ->select('producers.id')
                            ->get();

            $producers_id = array_pluck($producers_id, 'id');
            $producers = Producer::with('category')->whereIn('id',  $producers_id)->get();

    //  2-On recherche lorsque juste le champ de recherche est renseigné
    //  Selon le meme fonctionnement que précedemment.

        }elseif(!empty($request['search']))
        {
          $search = $request['search'];

          $producers_id = \DB::table('producers')
                        ->join('item_producer','producers.id', '=', 'item_producer.producer_id')
                        ->leftJoin('items','items.id', '=', 'item_producer.item_id')
                        ->where('items.comment', 'like', '%' . $request['search'] . '%')
                        ->orWhere('producers.name', 'like', '%' . $request['search'] . '%')
                        ->orWhere('producers.adresse', 'like', '%' . $request['search'] . '%')
                        ->orWhere('producers.ville', 'like', '%' . $request['search'] . '%')
                        ->orWhere('producers.zipcode', 'like', '%' . $request['search'] . '%')
                        ->select('producers.id as prod_id')
                        ->get();


          $producers_id = array_pluck($producers_id, 'prod_id');
            if(!empty($producers_id)){
                $producers = Producer::whereIn('id', $producers_id)->with('category')->get();
            }else{
                $producers = [];
            }

        }else{
            return redirect()->route('home')->with('success', 'tss');
        }

           $countsearch = count($producers);

      return view('front/search',compact('producers','countsearch'));
    }

    public function actionSearchMap($zone)
    {
      $producers = Producer::where('zone', '=', $zone)->get();
      $countsearch = count($producers);

      return view('front/search',compact('producers','countsearch'));
    }
}
