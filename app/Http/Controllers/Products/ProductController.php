<?php

namespace App\Http\Controllers\Products;

use Illuminate\Http\Request;
use App\Http\Resources\ProductIndexResources;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Scoping\Scopes\CategoryScope;

class ProductController extends Controller
{
   public function index()
   {

   	$product =  Product::withScopes($this->scopes())->paginate(10);

	return ProductIndexResources::collection($product);

   }
   public function show(Product $product)
   {

   		return new  ProductIndexResources($product);
   }

    protected function scopes()
   {

   	 return [

       'category' => new CategoryScope()

   	 ];
   }
}
