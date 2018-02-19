<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Producer extends Model

{
    use SoftDeletes;

    protected $table = "producers" ;

    protected $fillable = ['name', 'statut', 'user_id', 'slug', 'description', 'adresse', 'zipcode' , 'ville', 'phone', 'website', 'producer_email', 'zone', 'path_img'];

    protected $dates = ['deleted_at'];



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

  public function category()
  {
    return $this->belongsToMany('App\Models\Category');
  }
}
