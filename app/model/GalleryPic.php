<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class GalleryPic extends Model
{
    protected $table='gallerypic';

    public function cat()
    {
        return $this->belongsTo('App\model\GalleryCat','cat_id');
    }
    
     public function sub_category()
    {
        return $this->belongsTo('App\model\Gallery_sub_cat','sub_cat_id','sub_cat_id');
    }
}
