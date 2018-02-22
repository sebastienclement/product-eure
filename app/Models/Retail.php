<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Retail extends Model
{
  use SoftDeletes;

  protected $table = "retails";

  protected $fillable = ['lieu','created_at'];

  protected $dates = ['deleted_at'];

  public function producer()
  {
    return $this->belongsToMany('App\Models\Producer');
  }
}
