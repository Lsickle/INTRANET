<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Output extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
	    'OutputName', 'OutputType'
	];

	public function procesos()
	{
	    return $this->belongsToMany('App\Process','processes_outputs');
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
