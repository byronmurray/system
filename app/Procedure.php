<?php

namespace App;

use App\Step;
use App\process;
use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    public function steps()
    {
    	return $this->hasMany(Step::class);
    }

    public function processes()
    {
    	return $this->belongsToMany(Process::class)->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
