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
  public function showListRetails()
  {
    $retails = Retail::all();

    return view('admin/list-retails', compact('retails'));
  }

  public function showNewRetail()
  {
    return view('admin/new-retail');
  }

  public function actionNewRetail(AdminRetailRequest $request)
  {
    $post = $request->all();

    \DB::table('retails')->insert([
        'name'  => $post['name'],
        'lieu'  => $post['lieu'],
        'created_at'  => Carbon::now(),
    ]);

    return redirect()->route('dashboard')->with('success', 'Retail créé');
  }

  public function showEditRetail($id)
  {
    $retail = Retail::FindOrFail($id);

    return view('admin/edit-retail', compact('retail'));
  }

  public function actionEditRetail(AdminRetailRequest $request, $id)
  {
    $post = $request->all();

    \DB::table('retails')->where('id',  $id )->update([
        'name'        => $post['name'],
        'lieu'        => $post['lieu'],
        'updated_at'  => Carbon::now(),
    ]);
    return redirect()->route('dashboard')->with('success', 'Retail modifié');
  }

  public function deleteRetail($id)
  {
    $retail = Retail::FindOrFail($id);

    $retail->delete();

    return redirect()->route('dashboard')->with('success', 'Retail supprimé');
  }
}
