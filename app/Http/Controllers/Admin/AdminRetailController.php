<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\AdminRetailRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Retail;
use Carbon\Carbon;
use Auth;

class AdminRetailController extends Controller
{
  /**
   * [showListRetails description]
   * affiche la vue de la liste des retails
   * @return [type] [description]
   */
  public function showListRetails()
  {
    $retails = Retail::all();

    return view('admin/list-retails', compact('retails'));
  }

  /**
   * [showNewRetail description]
   * affiche la vue du formulaire d'ajout de retail
   * @return [type] [description]
   */
  public function showNewRetail()
  {
    return view('admin/new-retail');
  }

  /**
   * [actionNewRetail description]
   * validation du formulaire d'ajout de retail
   * @param  AdminRetailRequest $request [description]
   * @return [type]                      [description]
   */
  public function actionNewRetail(AdminRetailRequest $request)
  {
    $post = $request->all();
    // dd($post);
    \DB::table('retails')->insert([
        'lieu'        => $post['lieu'],
        'created_at'  => Carbon::now(),
    ]);

    return redirect()->route('dashboard')->with('success', 'Retail créé');
  }

  /**
   * [showEditRetail description]
   * affiche la vue pour modifier un retail
   * @param  [type] $id [description]
   * @return [type]     [description]
   */
  public function showEditRetail($id)
  {
    $retail = Retail::FindOrFail($id);

    return view('admin/edit-retail', compact('retail'));
  }

  /**
   * [actionEditRetail description]
   * validation du formulaire de modification
   * @param  AdminRetailRequest $request [description]
   * @param  [type]             $id      [description]
   * @return [type]                      [description]
   */
  public function actionEditRetail(AdminRetailRequest $request, $id)
  {

    $post = $request->all();

    \DB::table('retails')->where('id',  $id )->update([
        'lieu'        => $post['lieu'],
        'updated_at'  => Carbon::now(),
    ]);
    return redirect()->route('dashboard')->with('success', 'Retail modifié');
  }

  /**
   * [deleteRetail description]
   * effacement d'un retail
   * @param  [type] $id [description]
   * @return [type]     [description]
   */
  public function deleteRetail($id)
  {
    $retail = Retail::FindOrFail($id);

    $retail->delete();

    return redirect()->route('dashboard')->with('success', 'Retail supprimé');
  }
}
