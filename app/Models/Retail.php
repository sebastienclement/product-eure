<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Retail extends Model
{
  protected $table = "retails" ;

  protected $fillable = ['title','content','statut','user_id'];

  public function producer()
  {
    return $this->belongsToMany('App\Models\Retail');
  }
}
