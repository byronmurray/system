<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Step extends Model
{

	protected $fillable = ['title', 'body'];

    public function procedure()
    {
    	return $this->belongsTo(Procedure::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
