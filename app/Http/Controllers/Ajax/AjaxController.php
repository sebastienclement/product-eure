<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{
  public function __contsruct()
  {
    $this->middleware('ajax');
  }

  public function addItem()
  {
    

  }


  public function addRetail()
  {

  }
}
