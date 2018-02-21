<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
  use SoftDeletes;


  protected $table = "items" ;

  protected $fillable = ['producer_id','comment'];

  protected $dates = ['deleted_at'];

  public function producer()
  {
    return $this->belongsToMany('App\Models\Producer');
  }
}
