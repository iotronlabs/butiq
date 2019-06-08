<?php

namespace App\Http\Controllers\Products;

use Illuminate\Http\Request;
use App\Http\Resources\ProductIndexResources;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
   public function index()
   {

   	$product =  Product::paginate(10);

	return ProductIndexResources::collection($product);

   }
   public function show(Product $product)
   {

   		return new  ProductIndexResources($product);
   }
}
