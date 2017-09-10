<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Company extends Model
{
    protected $table='company_info';
   // public $timestamps = false;

//    public function units(){
//        return $this->belongsTo('App\model\Unit','unit_id');
//    }
//    public function category()
//    {
//        return $this->belongsTo('App\model\Category','cat_id');
//    }
//    public function sub_category()
//    {
//        return $this->belongsTo('App\model\Sub_Category','sub_cat_id');
//    }
//    public function stock()
//    {
//        return $this->hasMany('App\model\Stocks','p_id');
//    }
//    public function purchase_details()
//    {
//        return $this->hasMany('App\model\Purchase_details','p_id');
//
//    }

//    public function sell_details()
//    {
//        return $this->hasMany('App\model\Sell_details','p_id');
//
//    }
}
