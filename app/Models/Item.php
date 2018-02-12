<?php

namespace App\Models;

use App\Models\Category;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
  protected $table = "items" ;

  protected $fillable = ['name','category_id','producer_id','comment'];


  public function category()
  {
    return $this->belongsTo('\App\Models\Category');
  }

  public function producer()
  {
    return $this->belongsToMany('App\Models\Producer');
  }
}
