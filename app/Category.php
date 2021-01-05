<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{   
    public $primaryKey = 'id'; 
    protected $table = 'categories'; 
    public function Seminars(){
        return $this->hasMany('App\Seminar');
    }
}
