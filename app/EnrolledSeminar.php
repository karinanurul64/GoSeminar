<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnrolledSeminar extends Model
{
    //
    public $primaryKey = 'id'; 
    protected $table = 'enrolledseminars';
    
    public function Users(){
        return $this->belongsTo('App\User', 'UserId'); 
    }

    public function Seminars(){
        return $this->belongsTo('App\Seminar', 'SeminarId'); 
    }
}
