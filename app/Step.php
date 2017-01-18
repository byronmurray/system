<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    public function procedure()
    {
    	return $this->belongsTo(Procedure::class);
    }
}
