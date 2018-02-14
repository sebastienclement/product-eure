<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
    protected $table = "producers" ;

    protected $fillable = ['name','content','statut','user_id', 'slug', 'description'];


  public function user()
  {
    return $this->belongsTo('\App\Models\User');
  }

  public function item()
  {
    return $this->belongsToMany('App\Models\Item');
  }

  public function retail()
  {
    return $this->belongsToMany('App\Models\Retail');
  }
}
