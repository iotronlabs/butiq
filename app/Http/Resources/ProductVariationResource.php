<?php

namespace App\Http\Resources;


//use App\Http\Resources\ProductVariationResource;
use App\Http\Resources\ProductIndexResource;
// use App\Http\Resources\ProductVariationResourc;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;


class ProductVariationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {   
         if ($this->resource instanceof Collection) {
            return ProductVariationResource::collection($this->resource);
        }

        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->formattedPrice,
            'priceVaries' => $this->priceVaries(),
            'stock_count' => $this->stockCount(),
            'in_stock' => $this->InStock(),
            


        ];
    }
}
