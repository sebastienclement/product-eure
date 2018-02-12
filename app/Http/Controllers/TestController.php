<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Article;
use App\models\Producer;
use App\models\Item;

class TestController extends Controller
{

    public function ontest(){


      // =========== ( GOOOD)===========
      // $articles = Article::with('user')->orderBy('created_at','desc')
      //               ->paginate(5);
      // ===============================

      // =========== ( GOOOD)===========
      // $producer = Producer::get();
      // ===============================

      $item = Item::with('categories')->get();

    return view('front/test',compact('item'));

}



}
