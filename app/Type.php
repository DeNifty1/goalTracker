<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model {
    protected $fillable = [
        'typeName'
    ];

    public function goals(){
        return $this->hasMany('App\Goal');
    }

}
