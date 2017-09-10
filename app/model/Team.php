<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Team extends Model
{
    protected $table='team';

    public function employee(){
        return $this->belongsTo('App\model\Employee','emp_id');
    }
}
