<?php

namespace App\Http\Resources;

use App\Http\Resources\ProductResource;
use App\Http\Resources\ProductVariationResource;
use App\Http\Resources\ProductIndexResources;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends ProductIndexResources
{
    public function toArray($request)
    {	
    	  return array_merge(parent::toArray($request), [
            'variations' => ProductVariationResource::collection(
                $this->variations->groupBy('type.name')
            )
        ]);
    	}
}
