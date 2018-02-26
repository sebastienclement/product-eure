<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service\PathUpload;
use App\Models\Producer;
use App\Models\Category;
use App\Models\Item;
use App\Models\Retail;
use Carbon\Carbon;
use App\Http\Requests\ProducerRequest;
use App\Http\Requests\ItemRequest;
use App\Http\Requests\RetailRequest;
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
   * affiche la vue pour modifier un producteur
   * @return [type] [description]
   */
  public function showEditProfilProducer($slug)
  {
    $producer = Producer::with('category')->where('slug', '=', $slug)->first();
    $categories = Category::pluck('name', 'id');
    // dd($producer);
    return view('front/profil-edit', compact('producer','categories'));
  }

   /**
   * [actionEditProfilProducer description]
   * validation du formulaire de modification
   * @return [type] [description]
   */
  public function actionEditProfilProducer(ProducerRequest $request, $id)
  {

    $post = $request->all();
    $producer = Producer::FindOrFail($id);
    foreach($post['category'] as $cat){$cat_ids[] = $cat ;}
    // Requete d'update sur la table producer
    // puis redirection sur la page profil éditable avec un message de succes
    if(!empty($request->file('image'))) {

      $path = new PathUpload($request->file('image'), 'producer');
      $request->file('image')->move(public_path($path->path()), $path->imageName());

      $post = $request->all();



      \DB::table('producers')->where('id', $id )->update([
        'name'            => $post['name'],
        'adresse'         => $post['adresse'],
        'zipcode'         => $post['zipcode'],
        'producer_email'  => $post['producer_email'],
        'ville'           => $post['ville'],
        'phone'           => $post['phone'],
        'website'         => $post['website'],
        'description'     => $post['description'],
        'path_img'        => $path->path().'/'.$path->imageName(),
        'updated_at'      => Carbon::now(),
      ]);
    } else {
      // dd($producer['path_img']);
      $producer->update($request->all());

    }
      $producer->category()->sync($cat_ids);

    return redirect()->route('profil-perso')->with('success', 'Votre profil a été mis à jour');
  }

  /**
   * [showNewProfilProducer description]
   * affiche la vue du formulaire d'inscription de producteur
   * @return [type] [description]
   */
  public function showNewProfilProducer()
  {

    $categories = Category::pluck('name', 'id');

    return view('front/profil-new',compact('categories'));
  }

  /**
   * [actionNewProfilProducer description]
   * validation du formulaire d'inscription
   * @param  ProducerRequest $request [description]
   * @return [type]                   [description]
   */
  public function actionNewProfilProducer(ProducerRequest $request)
  {

     $post = $request->all();
     foreach($post['category'] as $cat){$cat_ids[] = $cat ;}

    // Requete d'insertion dans la bdd sur la table producer
    // puis redirect sur la page profil éditable avec mess success
    if(!empty($request->file('image'))) {

      $path = new PathUpload($request->file('image'), 'producer');
      $request->file('image')->move(public_path($path->path()), $path->imageName());

      $image =  $path->path().'/'.$path->imageName();
    } else {
      $image = '/img/icons/040-farmer.svg';
    }

    $inputs = array_merge($request->all(), [
      'zone'    => $this->generateZoning($request->zipcode),
      'user_id'  => Auth::id(),
      'slug'     => str_slug($request->name),
      'path_img' => $image,
    ]);

    Producer::create($inputs)->category()->sync($cat_ids);


    return redirect()->route('profil-perso');


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


  /**
   * [actionEditItemProfilProducer Modification d'un item lié au profil perso via un update]
   * @return [type] [description]
   */
  public function actionEditItemProfilProducer(ItemRequest $request, $id)
  {
    $item = Item::FindOrFail($id);

    $item->update($request->all());

    return redirect()->route('profil-perso')->with('success', 'Votre produit a été mis à jour');
  }

  /**
   * [actionDeleteItemProfilProducer Suppression d'un item lié au profil perso via un soft delete]
   * @return [type] [description]
   */
  public function actionDeleteItemProfilProducer($id)
  {
    $item = Item::FindOrFail($id);
    $item->delete();

    return redirect()->route('profil-perso')->with('success', 'Votre produit a bien été supprimé');
  }

  /**
   * [actionEditRetailProfilProducer Modification d'un retail lié au profil perso via un update]
   * @return [type] [description]
   */
  public function actionEditRetailProfilProducer(RetailRequest $request, $id)
  {
    $retail = Retail::FindOrFail($id);

    $retail->update($request->all());

    return redirect()->route('profil-perso')->with('success', 'Le lieu où l\'on peut trouver vos produits a été mis à jour');
  }

  /**
   * [actionDeleteRetailProfilProducer Suppression d'un retail lié au profil perso via un soft delete]
   * @return [type] [description]
   */
  public function actionDeleteRetailProfilProducer($id)
  {
    $retail = Retail::FindOrFail($id);
    $retail->delete();

    return redirect()->route('profil-perso')->with('success', 'Votre lieu de vente a bien été supprimé');
  }
}
