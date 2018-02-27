<?php

namespace App\Models;
use App\Http\Requests\SearchRequest;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Producer extends Model

{
    use SoftDeletes;

    protected $table = "producers" ;

    protected $fillable = ['name', 'statut', 'user_id', 'slug', 'description', 'adresse', 'zipcode' , 'ville', 'phone', 'website', 'producer_email', 'zone', 'path_img'];

    protected $dates = ['deleted_at'];

    public static $producers;

  public function user()
  {
    return $this->belongsTo('\App\Models\User');
  }

  public function item()
  {
    return $this->belongsToMany('App\Models\Item');
  }

  public function retail()
  {
    return $this->belongsToMany('App\Models\Retail');
  }

  public function category()
  {
    return $this->belongsToMany('App\Models\Category');
  }

/**
 *[Recherche lorsque les deux champs ne sont pas vides]
 * @param  SearchRequest $request
 * @return [Object]
 */
  public static function searchBoth($category,$search)
  {

    //on récupère l'id des producteurs leurs catégories et leurs items correspondant à la recherched l'utilisateur


    $producers_id = Producer::join('category_producer','producers.id', '=','category_producer.producer_id')
                      ->where('category_producer.category_id', '=', $category)
                      ->join('item_producer','producers.id', '=', 'item_producer.producer_id')
                      ->join('items','items.id', '=', 'item_producer.item_id')
                      ->where(function($query) use ($search){
                          $query->where('items.comment', 'like', '%' . $search . '%')
                              ->orWhere('producers.name', 'like', '%' . $search . '%')
                              ->orWhere('producers.ville', 'like', '%' . $search . '%')
                              ->orWhere('producers.adresse', 'like', '%' . $search . '%')
                              ->orWhere('producers.zipcode', 'like', '%' . $search . '%');
                         })
                        ->select('producers.id as prod_id')
                      ->get();


    //On ne garde qu'un exemplaire de chaque id, dont on se sert pour retrouver les infos du producteurs

    $producers_id = array_pluck($producers_id, 'prod_id');

          if(!empty($producers_id)){
              $producers = Producer::whereIn('id', $producers_id)->where('status', '=', 'confirmed')->with('category')->get();
          }else{
              $producers = [];
          }

    return $producers;
  }

/**
 * [Recherche lorsque le champ catégory est le seul existant]
 * @param  SearchRequest $request
 * @return [Object]
 */
  public static function searchCat($category_id){

    $producers_id = Producer::where('status', '=', 'confirmed')
                    ->join('category_producer','producers.id', '=','category_producer.producer_id')
                    ->where('category_producer.category_id', '=', $category_id)
                    ->join('categories','category_producer.category_id' ,'=','categories.id')
                    ->select('producers.id')
                    ->get();

    $producers_id = array_pluck($producers_id, 'id');
    $producers = Producer::with('category')->whereIn('id',  $producers_id)->get();

    return $producers;
  }

/**
 * [Recherche lorsque le champ input est le seul existant]
 * @param  SearchRequest $request
 * @return [Object]
 */
  public static function searchInput($search)
  {

    $producers_id = \DB::table("producers")

                  ->join('item_producer','producers.id', '=', 'item_producer.producer_id')
                  ->leftJoin('items','items.id', '=', 'item_producer.item_id')
                  ->where(function($query) use ($search){
                      $query->where('items.comment', 'like', '%' . $search . '%')
                          ->orWhere('producers.name', 'like', '%' . $search . '%')
                          ->orWhere('producers.ville', 'like', '%' . $search . '%')
                          ->orWhere('producers.adresse', 'like', '%' . $search . '%')
                          ->orWhere('producers.zipcode', 'like', '%' . $search . '%');
                     })
                  ->select('producers.id as prod_id')
                  ->get();


    $producers_id = array_pluck($producers_id, 'prod_id');
      if(!empty($producers_id)){
          $producers = Producer::where('status', '=', 'confirmed')->whereIn('id', $producers_id)->with('category')->get();
      }else{
          $producers = [];
      }

    return $producers;

  }
}
