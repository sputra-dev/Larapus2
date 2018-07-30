<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title','author_id','amount','cover'];

    public function author(){
        return $this->belongsTo('App\Author','author_id');
    }
     public function borrow(){
        return $this->HasMany('App\BorrowLog','book_id');
    }
}
