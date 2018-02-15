<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryProducer extends Model
{
    protected $table = "category_producer" ;

    protected $fillable = ['category_id','producer_id'];
}
