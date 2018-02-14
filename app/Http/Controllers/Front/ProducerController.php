<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Producer;

class ProducerController extends Controller
{
    public function showProfilProducer($slug)
    {
      $producer = Producer::findOrFail($slug);

      return view('front/profil-public/', compact('producer'));
    }

    public function showAllProducers()
    {
      $producers = Producer::all();
      return view('front/list-producers', compact('producers'));
    }

}
