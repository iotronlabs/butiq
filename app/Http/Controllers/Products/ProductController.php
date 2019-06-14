<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductIndexResources;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Scoping\Scopes\CategoryScope;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index()
   {

   	$product =  Product::withScopes($this->scopes())->paginate(10);

	return ProductIndexResources::collection($product);

   }
   public function show(Product $product)
   {

   		return new  ProductResource($product);
   }

    protected function scopes()
   {

   	 return [

       'category' => new CategoryScope()

   	 ];
   }
}
