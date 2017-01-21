<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['title'];

    public function processes()
    {
    	return $this->belongsToMany(Process::class)->withTimestamps();
    }
}
