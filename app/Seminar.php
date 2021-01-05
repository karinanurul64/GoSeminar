<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{   
    public $primaryKey = 'id'; 
    protected $table = 'seminars'; 
    public function Category(){
        return $this->belongsTo('App\Category', 'CategoryId');
    }

    public function EnrolledSeminars(){
        return $this->hasMany('App\EnrolledSeminars'); 
    }

    public function User(){
        return $this->belongsTo('App\User', 'UserId');
    }
}
