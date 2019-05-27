<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posicion extends Model
{
    public function getImgAttribute(){
        switch ($this->id){
            case 1:
                return 'arquero.png';
                break;
            case 2:
                return 'def2.png';
                break;
            case 3:
                return 'mid.png';
                break;
            case 4:
                return 'del.png';
                break;
        }
    }

    public function getColorClassAttribute(){
        switch ($this->id){
            case 1:
                return 'arquero';
                break;
            case 2:
                return 'defensor';
                break;
            case 3:
                return 'mediocampista';
                break;
            case 4:
                return 'delantero';
                break;
        }
    }

    public function getPosicionAttribute($value){
        return ucfirst($value);
    }
}
