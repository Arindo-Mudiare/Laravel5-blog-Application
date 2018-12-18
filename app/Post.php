<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // category relationship method
    public function category() {
        return $this->belongsTo('App\Category');
    }
}
