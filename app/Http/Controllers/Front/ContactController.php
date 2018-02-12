<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showFormContact()
    {
      return view('front/contact');
    }

    public function actionFormContact()
    {
      // Envoie du contenu du message du form
      // puis redirect vers la page accueil avec message

      return redirect()->route('accueil')->with('success', 'Votre message à bien été envoyé');
    }
}
