<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['name'];

    public function books(){
        return $this->HasMany('App\Book','author_id');
    }
}
