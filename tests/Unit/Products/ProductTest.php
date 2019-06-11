<?php

namespace Tests\Unit\Products;

use Tests\TestCase;
use App\Models\Product;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
   
        	public function  test_it_get_user_key_route_name()
        	{
        		$product = new Product();

        		$this->assertEquals($product->getRouteKeyName(), 'slug'); 



        	}
    
}
