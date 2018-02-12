<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
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
      //traiter l'affichage des articles

      return view('front/home');
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
