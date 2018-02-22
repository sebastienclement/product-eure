<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemRequest;
use App\Http\Requests\RetailRequest;
use App\Models\Item;
use App\Models\Retail;
use Auth;
use Carbon\Carbon;
use App\Models\Producer;

class AjaxController extends Controller
{
  public function __contsruct()
  {
    $this->middleware('ajax');
  }

  public function addItem(ItemRequest $request)
  {
    $id_producer = Producer::select('id')->where('user_id', '=', Auth::id())->first();

    $item = array_merge($request->all(),[
      'created_at' => Carbon::now()
    ]);
    Item::create($item)->producer()->sync($id_producer);


    $html = '<li>'.$request->comment.'</li>';


    return response()->json($html);

  }


  public function addRetail(RetailRequest $request)
  {
    $id_producer = Producer::select('id')->where('user_id', '=', Auth::id())->first();

    $retail = array_merge($request->all(),[
      'created_at' => Carbon::now()
    ]);
    Retail::create($retail)->producer()->sync($id_producer);

    $html = '<li>'.$request->lieu.'</li>';

    return response()->json($html);
  }
}
