<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Jenssegers\Date\Date;

class Jugador extends Authenticatable
{
    use Notifiable;
    
    protected $guarded = ['id'];

    protected $guard = 'jugador';

    protected $dates = [
        'fecha_nacimiento'
    ];

    public function setAlturaAttribute($value)
    {
        if($value<100){
            $this->attributes['altura'] = $value .'0';
        }else{
            $this->attributes['altura'] = $value ;
        }
    }

    public function setFechaNacimientoAttribute($value)
    {
        $this->attributes['fecha_nacimiento'] = Carbon::createFromFormat('d/m/Y',$value);
    }

    public function getFechaNacimientoAttribute($date)
    {
        if($date){
            return Date::parse($date)->format('j-m-Y');
        }
        return null;
    }

    public function getEdadAttribute($value)
    {
        if($this->fecha_nacimiento){
            return Date::parse($this->fecha_nacimiento)->diffInYears(Carbon::now());
        }elseif($value){
            return $value;
        }
        return null;
    }

    public function posicion()
    {
        return $this->belongsTo('App\Posicion');
    }

    public function pais()
    {
        return $this->belongsTo('App\Pais');
    }
    public function provincia()
    {
        return $this->belongsTo('App\Provincia');
    }
    
    public function manager()
    {
        return $this->belongsTo('App\Manager');
    }

    public function manager_formated(){
        if($this->manager){
            $arr = explode(' ',trim($this->manager->nombre));
            return  $arr[0];
        }else{
            return "CPG";
        }
    }

    public function scopeValidados($query)
    {
        return $query->where('estado','>=', '2')
                     ->where('estado','<', '5');
    }

    public function setNombreAttribute($value){
        $nombre = ucwords($value);
        $this->attributes['nombre'] = $nombre;

        if(empty($this->attributes['slug'])){
            $this->attributes['slug'] = str_slug($nombre). '-' . str_random(4);
        }
    }
    public function getTieneVideoAttribute(){
        if($this->link_video){
            return '1';
        }else{
            return null;
        }
    }

    public function getEstadoFormatedAttribute(){
        return config('cpg.estados')[$this->attributes['estado']];
    }
    public function getEstadoLabelAttribute(){
        return config('cpg.estados-label')[$this->attributes['estado']];
    }
    
    public function getUbicacionAttribute(){
        if($this->provincia && $this->pais){
            return $this->provincia->nombre. " " . $this->pais->code;
        }else{
            return '';
        }
    }

    public function getImagenAttribute(){
        if(isset($this->attributes['link_img']) && $this->attributes['link_img']){
            if (file_exists( public_path($this->attributes['link_img']))) {
                return $this->attributes['link_img'];
            }
        }
        return 'img/default.png';
    }

    public function images(){
        return $this->hasMany('App\Image')->orderBy('updated_at', 'DESC');
    }

    public function videos(){
        return $this->hasMany('App\YoutubeVideo')->orderBy('updated_at', 'DESC');
    }
}
