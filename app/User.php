<?php

namespace App;

use App\Step;
use App\Process;
use App\Procedure;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['name', 'email', 'password'];

    protected $hidden = ['password', 'remember_token'];
    

    public function processes()
    {
        return $this->hasMany(Process::class);
    }

    public function procedures()
    {
        return $this->hasMany(Procedure::class);
    }

    public function steps()
    {
        return $this->hasMany(Step::class);
    }


}
