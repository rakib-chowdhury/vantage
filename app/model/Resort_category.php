<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Resort_category extends Model
{
    protected $table='resort_category';

    public function hasPic()
    {
        return $this->hasMany('App\model\All_pics','cat_id');
    }
    
   
}
