<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DepartementResource extends JsonResource
{
  /**
  * Transform the resource into an array.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return array
  */
  public function toArray($request)
  {
    return [
      'id' => $this->id,
      'departement_name' => $this->departement_name,
      'region_id' => $this->region_id,
      'region' => $this->region,
      'carte' => $this->carte,
      'latitude' => $this->latitude,
      'longitude' => $this->longitude,
      'superficie' => $this->superficie,
      'population' => $this->population,
      'incidence_de_pauvrete' => $this->incidence_de_pauvrete,
      'taux_alphabetisation' => $this->taux_alphabetisation,
      'population_feminine' => $this->population_feminine,
      'population_masculine' => $this->population_masculine,
      'taux_scolarisarion' => $this->taux_scolarisarion,
      'taux_etat_civil' => $this->taux_etat_civil,
      'arrondissements' => $this->arrondissements,
    ];
  }
}
