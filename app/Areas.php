<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'AreaName', 'AreaSede', 
    ];

    public function documents()
    {
        return $this->belongsToMany('App\Documents','area_document');
        //Relación de la tabla areas y la tabla documentos 
    }

    public function indicators()
    {
        return $this->belongsToMany('App\Indicators','area_indicator');
        //Relación de la tabla areas y la tabla indicadores
    }

    public function users()
    {
        return $this->hasMany('App\User','area_user');
        //Relación de la tabla areas y la tabla indicadores
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];
}
