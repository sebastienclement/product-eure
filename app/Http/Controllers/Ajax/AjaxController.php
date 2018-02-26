<?php

namespace App\Http\Controllers\Ajax;

use Validator;
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


  /**
   * [addItem Permet l'insertion en base de données en Ajax d'un item pour un producteur]
   * @param Request $request [description]
   */
  public function addItem(Request $request)
  {
    $id_producer = Producer::select('id')->where('user_id', '=', Auth::id())->first();

    $item = array_merge($request->all(),[
      'created_at' => Carbon::now()
    ]);


    $validator = Validator::make($request->all(), [
            'comment' => 'required|min:3|max:200'
        ]);

    if ($validator->fails()) {

      return response()->json([
        'err'   => true,
        'error' => $validator->errors()
      ]);

    } else {

      Item::create($item)->producer()->sync($id_producer);

      $lastIdItem = Item::select('id')->orderBy('created_at', 'desc')->first();

      $html = '<li><a data-toggle="modal" data-target="#myModal' . $lastIdItem->id . '"><i class="fa fa-edit" aria-hidden="true"></i></a>' . $request->comment . '</li>';

      return response()->json($html);
    }

  }

  /**
   * [addRetail Permet l'insertion en base de données en Ajax d'un retail pour un producteur]
   * @param Request $request [description]
   */
  public function addRetail(Request $request)
  {
    $id_producer = Producer::select('id')->where('user_id', '=', Auth::id())->first();

    $retail = array_merge($request->all(),[
      'created_at' => Carbon::now()
    ]);

    $validator = Validator::make($request->all(), [
            'lieu' => 'required|min:3|max:200'
        ]);

    if ($validator->fails()) {

      return response()->json([
        'err'   => true,
        'error' => $validator->errors()
      ]);

    } else {

    Retail::create($retail)->producer()->sync($id_producer);

    $lastIdRetail = Retail::select('id')->orderBy('created_at', 'desc')->first();

    $html = '<li><a data-toggle="modal" data-target="#myModal' . $lastIdRetail->id . '"><i class="fa fa-edit" aria-hidden="true"></i></a>' . $request->lieu . '</li>';
    return response()->json($html);
    }

  }




}
