<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Milestone extends Model {
    protected $fillable = [
        'milestoneName'
    ];

    public function goals(){
        return $this->belongsTo('App\Goal');
    }


}
