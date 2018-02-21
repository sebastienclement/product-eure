<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{
  use SoftDeletes;

  protected $table = "categories" ;

  protected $fillable = ['name','path_img'];

  protected $dates = ['deleted_at'];


  public function producer()
  {
    return $this->belongsToMany('App\Models\Producer');
  }

}
