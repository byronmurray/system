<?php

namespace App;

use App\Procedure;
use Illuminate\Database\Eloquent\Model;

class Process extends Model
{

	protected $fillable = ['title'];
	
    public function procedures()
    {
    	return $this->belongsToMany(Procedure::class)->withTimestamps();
    }

    public function groups()
    {
    	return $this->belongsToMany(Group::class)->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
