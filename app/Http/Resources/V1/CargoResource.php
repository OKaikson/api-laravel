<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CargoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        return [
            'cargo' => $this->cargo,
            'nivel' => $this->nivel,
            'descricao' => $this->cargo.' ('.$this->nivel.')',
        ];
    }
}
