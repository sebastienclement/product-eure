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

      $html = '<li>'.$request->comment.'</li>';
      return response()->json($html);
    }

  }


  public function addRetail(Request $request)
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
