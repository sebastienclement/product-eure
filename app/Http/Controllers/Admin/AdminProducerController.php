<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProducerRequest;
use Illuminate\Http\Request;
use App\Models\Producer;
use Auth;

class AdminProducerController extends Controller
{
  public function showListProducers()
  {
    $producers = Producer::with('user')->get();

    return view('admin/list-producers', compact('producers'));
  }

  public function showNewProducer()
  {
    return view('admin/new-producer');
  }

  public function actionNewProducer(ProducerRequest $request)
  {
    $inputs = array_merge($request->all(), [
     'user_id' => Auth::id(),
     'slug'    => str_slug($request->name)
    ]);
    Producer::create($inputs);

    return redirect()->route('dashboard')->with('success', 'Nouveau Producteur créé');
  }

  public function showEditProducer($id)
  {
    $producer = Producer::FindOrFail($id);
    $producer->update($request->all());
    return redirect()->route('dashboard')->with('success', 'Producteur mis à jour');
  }

  public function actionEditProducer(ProducerRequest $request ,$id)
  {
    $producer = Producer::FindOrFail($id);
    $producer->update($request->all());
    return redirect()->route('dashboard')->with('success', 'Modification du producteur prise en compte');
  }

  public function deleteProducer($id)
  {
    $producer = Producer::FindOrFail($id);
    $producer->delete();
    return redirect()->route('dashboard')->with('success', 'Producteur supprimé');
  }
}
