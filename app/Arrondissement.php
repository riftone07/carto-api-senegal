<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arrondissement extends Model
{
	 protected $guarded =['id'];
//	protected $primaryKey = 'code';

//	public $incrementing = false;

  public $timestamps = false;
	public function communes()
	{
		return $this->hasMany(Commune::class);
	}

}
