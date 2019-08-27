<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
	  public $timestamps = false;
	 protected $guarded =['id'];
//	protected $primaryKey = 'code';

//	public $incrementing = false;

	public function arrondissements()
	{
		return $this->hasMany(Arrondissement::class);
	}

}
