<?php

namespace Tests\Unit\Models\Categories;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Category;
class CategoryTest extends TestCase
{
   public function test_it_many_children()
   {
   	$category = factory(Category::class)->create();

   	$category->children()->save(
   		factory(Category::class)->create()
   	);


   	$this->assertInstanceOf(Category::class, $category->children->first());

   }

   public function test_it_can_fetch_only_parents()
   {
   	$category = factory(Category::class)->create();

   	$category->children()->save(
   		factory(Category::class)->create()
   	);


   	$this->assertEquals(1,Category::parents()->count());
   	
   }

   public function test_it_orderable_by_a_numbered_order()
   {
   	$category = factory(Category::class)->create([

   		'order' => 2
   	]);

   		$anotherCategory = factory(Category::class)->create([

   		'order' => 1
   	]);

   

   	$this->assertEquals($anotherCategory->name, Category::ordered()->first()->name);
   	
   }
   
}
