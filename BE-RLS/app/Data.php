<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    public $timestamps = false;
    public function temp(){
        return $this->hasMany('App\Temps','id_data');
    }

}
