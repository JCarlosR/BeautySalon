<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $appends = ['personal_full_name'];
    public function getPersonalFullNameAttribute(){
        return $this->personal->nombres.' '.$this->personal->apellidos;
    }
    public function personal()
    {
        return $this->belongsTo('App\Personal');
    }
}
