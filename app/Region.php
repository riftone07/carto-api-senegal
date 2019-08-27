<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
	protected $guarded =['id'];
  public $timestamps = false;
	public function departements()
	{
		return $this->hasMany(Departement::class, 'region_id');
	}
}
