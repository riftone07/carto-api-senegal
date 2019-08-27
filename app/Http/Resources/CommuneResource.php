<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommuneResource extends JsonResource
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
          'commune_name' => $this->commune_name,
          'arrondissement_id' => $this->arrondissement_id,
          'arrondissement' => $this->arrondissement,
          'carte' => $this->carte,
          'maire' => $this->maire,
          'contact' => $this->contact,
          'adresse' => $this->adresse,
          'latitude' => $this->latitude,
          'longitude' => $this->longitude ,
          'superficie' => $this->superficie ,
          'population' => $this->population ,
          'population_masculine' => $this->population_masculine ,
          'population_feminine' => $this->population_feminine ,
          'incidence_de_pauvrete' => $this->incidence_de_pauvrete ,
          'taux_alphabetisation' => $this->taux_alphabetisation ,
          'taux_scolarisarion' => $this->taux_scolarisarion ,
          'taux_etat_civil' => $this->taux_etat_civil ,
          'elus' => $this->elus ,
        ];
    }
}
