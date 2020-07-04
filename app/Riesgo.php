<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Riesgo extends Model
{
    use SoftDeletes;

    // use Searchable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'RiesgDescrip',
        'RiesgAction'
    ];


    public function procesos()
    {
        return $this->belongsToMany('App\Process', 'processes_riesgos');
        //Relación de la tabla processes y la tabla gseguridad 
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

    protected $dates = ['deleted_at', 'updated_at', 'created_at'];
}
