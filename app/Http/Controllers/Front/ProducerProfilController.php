<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service\PathUpload;
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
   * traitement des image via le service Upload
   * [action description]
   * @param  FormualaireRequest $request [description]
   * @return [type]                      [description]
   */
  public function action(FormualaireRequest $request)
  {
    if(!empty($request->file('image'))) {
      //uploader mon image
      //ou mettre mon image et comment elle s'appelle
      $path = new PathUpload($request->file('image'), 'formulaire');
      $request->file('image')->move(public_path($path->path()), $path->imageName());
    }

    return redirect()->route('home')->with('success', 'ok good');
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
    if(!empty($request->file('image'))) {
      //uploader mon image
      //ou mettre mon image et comment elle s'appelle
    $path = new PathUpload($request->file('image'), 'formulaire');
    $request->file('image')->move(public_path($path->path()), $path->imageName());
    }
//==================================================================================
    $inputs = array_merge($request->all(), [
     'user_id' => Auth::id(),
     'slug' => str_slug($request->name),
    ]);
    Producer::create($inputs);

    return redirect()->route('home')->with('success', 'Votre profil producteur vient d\'être créé');
  }


  private function generateZoning($zipcode)
  {
    if (($zipcode === 27290) || ($zipcode === 27310) || ($zipcode === 27350)  || ($zipcode === 27370) || ($zipcode === 27500) || ($zipcode === 27520) || ($zipcode === 27670) || ($zipcode === 27680)) {
      return $zone = 'a';
    } elseif (($zipcode === 27100) || ($zipcode === 27110) || ($zipcode === 27340) || ($zipcode === 27400) || ($zipcode === 27430) || ($zipcode === 27460) || ($zipcode === 27590) || ($zipcode === 27690) || ($zipcode === 27740)) {
      return $zone = 'b';
    } elseif (($zipcode === 27140) || ($zipcode === 27150) || ($zipcode === 27200) || ($zipcode === 27360) || ($zipcode === 27380) || ($zipcode === 27420) || ($zipcode === 27440) || ($zipcode === 27480) || ($zipcode === 27510) || ($zipcode === 27610) || ($zipcode === 27620) || ($zipcode === 27630) || ($zipcode === 27660) || ($zipcode === 27700) || ($zipcode === 27720) || ($zipcode === 27790) || ($zipcode === 27830) || ($zipcode === 27850) || ($zipcode === 27860) || ($zipcode === 27870) || ($zipcode === 27910)) {
      return $zone = 'c';
    } elseif (($zipcode === 27170) || ($zipcode === 27210) || ($zipcode === 27230) || ($zipcode === 27260) || ($zipcode === 27300) || ($zipcode === 27410) || ($zipcode === 27450) || ($zipcode === 27470) || ($zipcode === 27550) || ($zipcode === 27560) || ($zipcode === 27800) || ($zipcode === 27890)) {
      return $zone = 'd';
    } elseif (($zipcode === 27130) || ($zipcode === 27160) || ($zipcode === 27190) || ($zipcode === 27240) || ($zipcode === 27250) || ($zipcode === 27270) || ($zipcode === 27320) || ($zipcode === 27330) || ($zipcode === 27390) || ($zipcode === 27570) || ($zipcode === 27580) || ($zipcode === 27760) || ($zipcode === 27700) || ($zipcode === 27820)) {
      return $zone = 'e';
    } elseif (($zipcode === 27000) || ($zipcode === 27120) || ($zipcode === 27180) || ($zipcode === 27220) || ($zipcode === 27490) || ($zipcode === 27530) || ($zipcode === 27540) || ($zipcode === 27600) || ($zipcode === 27640) || ($zipcode === 27650) || ($zipcode === 27710) || ($zipcode === 27730) || ($zipcode === 27750) || ($zipcode === 27780) || ($zipcode === 27810) || ($zipcode === 27920) || ($zipcode === 27930) || ($zipcode === 27940) || ($zipcode === 27950)) {
      return $zone 'f';
    }
  }

}
