<?php

namespace App\Http\Resources;

use App\Models\Townships;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class RegionCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        $region_townships = Townships::where('region_id', $this->id)->get();

        return [
            'id' => $this->id,
            'region_name' => $this->region_name,
            'townships' => TownshipCollection::collection($region_townships)
        ];
    }
}
