<?php

namespace App;

use App\Book;
use App\User;
use Illuminate\Database\Eloquent\Model;

class BorrowLog extends Model
{
    protected $fillable = ['book_id', 'user_id', 'is_returned'];

    public function book()
	{
	return $this->belongsTo('App\Book','book_id');
	}
	public function user()
	{
	return $this->belongsTo('App\User','user_id');
	}

	protected $casts = ['is_returned' => 'boolean'];

	public function scopeReturned($query)
	{
	return $query->where('is_returned', 1);
	}
	public function scopeBorrowed($query)
	{
	return $query->where('is_returned', 0);
	}

}
