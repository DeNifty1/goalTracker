<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Milestone extends Model {
    protected $fillable = [
        'milestoneName'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }


}
