<?php

namespace App\Http\Resources\V1;

use App\Models\Cargo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PessoaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'nome_completo' => $this->nome_completo,
            'nascimento' => Carbon::make($this->nascimento)->format('d/m/Y'),
            'cargo' => new CargoResource(Cargo::find($this->cargo_id))
        ];
    }
}
