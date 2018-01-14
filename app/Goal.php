<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model {
    protected $fillable = [
        'goalName'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function type(){
        return $this->belongsTo('App\Type');
    }
    public function milestone(){
        return $this->hasMany('App\Milestone');
    }
    public function progress(){
        return $this->hasMany('App\Progress');
    }
}
