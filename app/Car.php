<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
     public function carsInfo(){
        return $this->hasOne("App\Car");
    }   
    protected $fillable=[
        "image", 
        'numero_telaio',
        'model',
        'porte',
        'data_immatricolazione',
        'marca',
        'is_new',
        'alimentazione',
        'prezzo',
    ];
}
