<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "articles" ;

    protected $fillable = ['title','content','user_id','status', 'path_img_article'];

    public function user()
      {
        return $this->belongsTo('\App\Models\User');
      }


}
