<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProducerRetail extends Model
{
  protected $table = "producer_retail" ;

  protected $fillable = ['producer_id','retail_id'];
}
