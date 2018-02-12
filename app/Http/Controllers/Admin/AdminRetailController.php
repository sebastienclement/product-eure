<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Retail;
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

  public function actionNewRetail(RetailRequest $request)
  {
    Retail::create($request->all());
    return redirect()->route('dashboard')->with('success', 'Retail créé');
  }

  public function showEditRetail($id)
  {
    $retail = Retail::FindOrFail($id);
    return view('admin/edit-retail', compact('retail'));
  }

  public function actionEditRetail(RetailRequest $request, $id)
  {
    $retail = Retail::FindOrFail($id);
    return redirect()->route('dashboard')->with('success', 'Retail modifié');
  }

  public function deleteRetail($id)
  {
    $retail = Retail::FindOrFail($id);
    $retail->delete();
    return redirect()->route('dashboard')->with('success', 'Retail supprimé');
  }
}
