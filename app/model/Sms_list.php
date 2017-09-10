<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Sms_list extends Model
{
    protected $table='sms_list';

    public function sender(){
        return $this->belongsTo('App\model\Employee','sender');
    }
    public function receiver(){
        return $this->belongsTo('App\model\Employee','receiver');
    }
}
