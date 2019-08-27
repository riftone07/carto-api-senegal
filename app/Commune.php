<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
	 protected $guarded  =['id'];
//	protected $primaryKey = 'code';

//	public $incrementing = false;
  public $timestamps = false;
	public function arrondissement()
	{
		return $this->belongsTo(Arrondissement::class);
	}
	public function elus()
	{
		return $this->hasMany(Elu::class);
	}

}
