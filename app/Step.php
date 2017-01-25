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
}
