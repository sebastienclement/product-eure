<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Producer;
use App\Models\Item;
use App\Models\Retail;
use App\Models\User;
use App\Models\ItemProducer;
use App\Models\ProducerRetail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $articles = Article::with('user')->orderBy('created_at','desc')->get();

      $categories = Category::with('item')->inRandomOrder()->paginate(5);
      $items = Item::inRandomOrder()->paginate(10);

      $producers = Producer::all();
      $retails = Retail::all();
      $users = User::all();
      $a = ItemProducer::all();
      $b = ProducerRetail::all();


      // $c = Producer::find(2)->retail;
      //     foreach ($c as $d) {
      //       echo $d->name;
      //     }







      return view('front/home',compact('$produce','articles','categories','producers','items','retails','users','a','b', 'c'));
    }

    /**
     * Renvoie les mentions légales
     * @return
     */
    public function mentions()
    {
      return view('front/mentions-legales');
    }

    /**
     * Renvoie les condiions d'utilisation
     * @return
     */
    public function conditions()
    {
      return view('front/conditions-utilisation');
    }
}
