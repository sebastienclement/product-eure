<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Producer;
use App\Http\Requests\ProducerRequest;
// use App\Http\Middleware\Abonne;
use Auth;

class ProducerProfilController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
    $this->middleware('abonne');
  }

  /**
   * [showEditProfilProducer description]
   * @return [type] [description]
   */
  public function showEditProfilProducer()
  {
    return view('front/profil-edit');
  }


  /**
   * [actionEditProfilProducer description]
   * @return [type] [description]
   */
  public function actionEditProfilProducer()
  {

    // Requete d'update sur la table producer
    // puis redirection sur la page profil éditable avec un message de succes

    return redirect()->route('front/profil-edit')->with('success', 'Votre profil a été mis à jour');
  }

  /**
   * [showNewProfilProducer description]
   * @return [type] [description]
   */
  public function showNewProfilProducer()
  {
    return view('front/profil-new');
  }

  /**
   * [actionNewProfilProducer description]
   * @param  ProducerRequest $request [description]
   * @return [type]                   [description]
   */
  public function actionNewProfilProducer(ProducerRequest $request)
  {

    // Requete d'insertion dans la bdd sur la table producer
    // puis redirect sur la page profil éditable avec mess success

     // dd($request);
    $inputs = array_merge($request->all(), [
     'user_id' => Auth::id(),
     'slug' => str_slug($request->name)
    ]);
    Producer::create($inputs);

    return redirect()->route('home')->with('success', 'Votre profil producteur vient d\'être créé');
  }
}
