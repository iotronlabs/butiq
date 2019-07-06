<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
// use App\Http\Resources\ProductIndexResources;
use App\Models\Product;
class ProductIndexResources extends JsonResource
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
        'name' => $this->name,
        'slug' =>$this->slug,
        'price' => $this->FormattedPrice,
        'description' =>$this->description,
        'stock_count' => $this->stockCount(),
        'in_stock' => $this->InStock(),

        ]  ;
    }
}
