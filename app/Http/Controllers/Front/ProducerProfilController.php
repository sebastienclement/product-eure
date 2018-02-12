<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProducerProfilController extends Controller
{
  public function showEditProfilProducer()
  {
    return view('front/profil-edit');
  }

  public function actionEditProfilProducer()
  {

    // Requete d'update sur la table producer
    // puis redirection sur la page profil éditable avec un message de succes

    return redirect()->route('front/profil-edit')->with('success', 'Votre profil a été mis à jour');
  }

  public function showNewProfilProducer()
  {
    return view('front/profil-new');
  }

  public function actionNewProfilProducer()
  {

    // Requete d'insertion dans la bdd sur la table producer
    // puis redirect sur la page profil éditable avec mess success

    return redirect()->route('front/profil-edit')->with('success', 'Votre profil vient d\'être créé');
  }
}
