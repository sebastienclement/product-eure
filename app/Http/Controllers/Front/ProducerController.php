<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProducerController extends Controller
{
    public function showProfilProducer()
    {
      return view('front/profil-public');
    }



}
