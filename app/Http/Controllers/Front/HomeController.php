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
      // $categories = Category::with('item')->inRandomOrder()->paginate(5);

      $article = Article::orderBy('created_at','desc')->first();
      
      // $path_img_article = \Image::open($article->path_img_article)
      //                     ->thumbnail(new \Imagine\Image\Box(350,350));
      // dd($path_img_article);
      $producers = Producer::all();

      $nbProdRoumois = $this->countProducersByZone('pays-roumois-et-marais-vernier',$producers);
      $nbProdNeubourg = $this->countProducersByZone('plateau-du-neubourg',$producers);
      $nbProdVexin = $this->countProducersByZone('vexin-normand',$producers);
      $nbProdLieuvin = $this->countProducersByZone('lieuvin',$producers);
      $nbProdOuche = $this->countProducersByZone('pays-d-ouche',$producers);
      $nbProdAndre = $this->countProducersByZone('plateau-de-saint-andre',$producers);

      return view('front/home',compact('article', 'image', 'nbProdRoumois', 'nbProdNeubourg', 'nbProdVexin', 'nbProdLieuvin', 'nbProdOuche', 'nbProdAndre', 'articles','categories','producers','items','retails','users','a','b', 'c'));
    }

    /**
     * [countProducersByZone permet à partir de la requête d'obtention de tous les producteurs d'avoir seulement ceux d'une zone précise]
     * @param  [string] $valueZone [La zone souhaitée]
     * @param  [array] $array [résultat de la requete $producers = Producer::all()]
     * @return [int]        [le comptage final de producteurs sur la zone souhaitée]
     */
    private function countProducersByZone($valueZone, $array)
    {
      $i = 0;
      foreach($array AS $line)
      {
        if($line->zone == $valueZone)
        {
            $i++;
        }
      }
      return $i;
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
