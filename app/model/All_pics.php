<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class All_pics extends Model
{
    protected $table='all_pic';   


    public function resort_cat()
    {
        return $this->belongsTo('App\model\Resort_category','cat_id');
    }


}
