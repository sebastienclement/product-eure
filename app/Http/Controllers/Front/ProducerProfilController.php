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

      $path = new PathUpload($request->file('image'), 'producer');
      $request->file('image')->move(public_path($path->path()), $path->imageName());

      $image =  $path->path().'/'.$path->imageName();
    } else {
      $image = NULL;
    }

    $inputs = array_merge($request->all(), [
      'zone'    => $this->generateZoning($request->zipcode),
      'user_id'  => Auth::id(),
      'slug'     => str_slug($request->name),
      'path_img' => $image,
    ]);
    Producer::create($inputs);

    return redirect()->route('home')->with('success', 'Votre profil producteur vient d\'être créé');


  }

  /**
   * [permet de d'affilier la zone depuis le code postal de la production
   * afin de pouvoir utiliser cette donnée pour la recherche via la carte sur la page d'accueil]
   * @param  [int] $zipcode [code postal du producteur]
   * @return [str]          [la zone du producteur]
   */
  private function generateZoning($zipcode)
  {
    $zipcodeA = [27290,27310,27350,27370,27500,27520,27670,27680];
    $zipcodeB = [27100,27110,27340,27400,27430,27460,27590,27690,27740];
    $zipcodeC = [27140,27150,27200,27360,27380,27420,27440,27480,27510,27610,27620,27630,27660,27700,27720,27790,27830,27850,27860,27870,27910];
    $zipcodeD = [27170,27210,27230,27260,27300,27410,27450,27470,27550,27560,27800,27890];
    $zipcodeE = [27130,27160,27190,27240,27250,27270,27320,27330,27390,27570,27580,27760,27770,27820];
    $zipcodeF = [27000,27120,27180,27220,27490,27530,27540,27600,27640,27650,27710,27730,27750,27780,27810,27920,27930,27940,27950];

    if (in_array($zipcode, $zipcodeA)) {
      return 'pays-roumois-et-marais-vernier';
    } elseif (in_array($zipcode, $zipcodeB)) {
      return 'plateau-du-neubourg';
    } elseif (in_array($zipcode, $zipcodeC)) {
      return 'vexin-normand';
    } elseif (in_array($zipcode, $zipcodeD)) {
      return 'lieuvin';
    } elseif (in_array($zipcode, $zipcodeE)) {
      return 'pays-d-ouche';
    } elseif (in_array($zipcode, $zipcodeF)) {
      return 'plateau-de-saint-andre';
    }
  }
}
