<?php

namespace App\Models;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Item extends Model
{
  use SoftDeletes;


  protected $table = "items" ;

  protected $fillable = ['name','category_id','producer_id','comment'];

  protected $dates = ['deleted_at'];

  public function category()
  {
    return $this->belongsTo('\App\Models\Category');
  }

  public function producer()
  {
    return $this->belongsToMany('App\Models\Producer');
  }
}
