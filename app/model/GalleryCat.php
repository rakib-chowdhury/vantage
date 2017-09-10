<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class GalleryCat extends Model
{
    protected $table='gallerycategory';

    public function hasPic()
    {
        return $this->hasMany('App\model\GalleryPic','cat_id');
    }
    
   
}
