<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Releases extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'RelName', 'RelMessage', 'RelDate', 'RelSrc', 'RelType', 'RelGeneral', 
    ];

    public function user()
    {
        return $this->belongsTo('App\User','release_user');
        //Relación de la tabla usuarios y la tabla releases 
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
