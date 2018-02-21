<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Retail;
use App\Models\Producer;
use App\Models\Category;
use Auth;

class ProducerController extends Controller
{
    public function showProfilProducer($slug)
    {
      $producer = Producer::with('item','retail')->where('slug', '=', $slug)->firstOrFail();
      // dd($producer);
      return view('front/profil-public', compact('producer'));
    }

    public function showAllProducers()
    {
      $producers = Producer::all();
      return view('front/list-producers', compact('producers'));
    }

    /**
     * show profil perso producteur
     */
     public function showProfilPersoProducer()
     {
       $categories = Category::pluck('name', 'id');
       $user = Auth::id();
       $producer = Producer::with('item','retail')->where('user_id', '=', $user)->first();
       // dd($producer);
       if (empty($producer)) {
         return view('front/profil-new',compact('categories'));
       } else {
         return view('front/profil-public', compact('producer'));
       }
     }

}
