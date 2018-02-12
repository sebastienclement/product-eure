<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemProducer extends Model
{
  protected $table = "item_producer" ;

  protected $fillable = ['item_id','producer_id'];
}
