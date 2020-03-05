<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
	    'InputName', 
	];

	public function procesos()
    {
        return $this->belongsToMany('App\Process','inputs_processes');
        //Relación de la tabla processes y la tabla inputs 
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
