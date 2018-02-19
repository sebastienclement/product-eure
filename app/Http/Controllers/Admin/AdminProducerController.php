<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProducerRequest;
use App\Service\PathUpload;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Producer;
use Auth;

class AdminProducerController extends Controller
{
  /**
   * [showListProducers affiche la vue la liste des pruducteurs]
   * @return [type] [description]
   */
  public function showListProducers()
  {
    $producers = Producer::with('user')->get();

    return view('admin/list-producers', compact('producers'));
  }
/**
 * [showNewProducer affiche la vue du formulaire d'ajout de producteur]
 * @return [type] [description]
 */
  public function showNewProducer()
  {
    return view('admin/new-producer');
  }
/**
 * [actionNewProducer validation du formulaire d'inscription]
 * @param  ProducerRequest $request [description]
 * @return [type]                   [description]
 */
  public function actionNewProducer(ProducerRequest $request)
  {

    if(!empty($request->file('image'))) {

      $path = new PathUpload($request->file('image'), 'producer');
      $request->file('image')->move(public_path($path->path()), $path->imageName());

      $image = $path->path().'/'.$path->imageName();
    } else {
      $image = 'img/icons/040-farmers.svg';
    }

    $inputs = array_merge($request->all(), [
      // 'zone'    => $this->generateZoning($request->zipcode),
      'user_id'  => Auth::id(),
      'slug'     => str_slug($request->name),
      'path_img' => $image,
    ]);
    Producer::create($inputs);

    return redirect()->route('dashboard')->with('success', 'Nouveau Producteur créé');
  }
/**
 * [showEditProducer affiche la vue pour modifier un producteur]
 * @param  [type] $id [description]
 * @return [type]     [description]
 */
  public function showEditProducer($id)
  {
    $producer = Producer::FindOrFail($id);

    return view('admin/edit-producer', compact('producer'));
  }
/**
 * [actionEditProducer validation du formulaire de modification]
 * @param  ProducerRequest $request [description]
 * @param  [type]          $id      [description]
 * @return [type]                   [description]
 */
  public function actionEditProducer(ProducerRequest $request ,$id)
  {
      if(!empty($request->file('image'))) {

        $path = new PathUpload($request->file('image'), 'producer');
        $request->file('image')->move(public_path($path->path()), $path->imageName());

        $post = $request->all();

        \DB::table('producers')->where('id', $id )->update([
          'name'            => $post['name'],
          'adresse'         => $post['adresse'],
          'zipcode'         => $post['zipcode'],
          'producer_email'  => $post['producer_email'],
          'phone'           => $post['phone'],
          'website'         => $post['website'],
          'description'     => $post['description'],
          'path_img'        => $path->path().'/'.$path->imageName(),
          'updated_at'      => Carbon::now(),
        ]);
      } else {

        $producer = Producer::FindOrFail($id);
        // dd($producer['path_img']);
        $producer->update($request->all());

      }
    return redirect()->route('dashboard')->with('success', 'Modification du producteur prise en compte');
}
/**
 * [deleteProducer effacement d'un producteur]
 * @param  [type] $id [description]
 * @return [type]     [description]
 */
  public function deleteProducer($id)
  {
    $producer = Producer::FindOrFail($id);

    $producer->delete();
    return redirect()->route('dashboard')->with('success', 'Producteur supprimé');
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
      return 'a';
    } elseif (in_array($zipcode, $zipcodeB)) {
      return 'b';
    } elseif (in_array($zipcode, $zipcodeC)) {
      return 'c';
    } elseif (in_array($zipcode, $zipcodeD)) {
      return 'd';
    } elseif (in_array($zipcode, $zipcodeE)) {
      return 'e';
    } elseif (in_array($zipcode, $zipcodeF)) {
      return 'f';
    }
  }
}
