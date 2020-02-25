<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temps extends Model
{
    public function coba(){
        return $this->belongsTo('App\Data','id_data');
    }
}
