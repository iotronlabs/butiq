<?php

namespace Tests\Feature\Categories;

use Tests\TestCase;
//use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Category;
use Illuminate\Foundation\Testing\TestResponse;


class CategoryIndexTest extends TestCase
{
    
    public function test_it_return_a_collection_of_categories()

    {
       $category =  factory(Category::class,2)->create();
       $response = $this->json('GET','api/categories');
       $category->each(function($category) use ($response){
        
        $response->assertJson([
            'slug' => $category->slug
        ]);
     
    });
    }


     public function test_it_return_only_parent_category()

    {
       $category=  factory(Category::class)->create();

       $category->children()->save(
        factory(Category::class)->create()

        );

       $this->json('GET','api/categories')
       ->assertJsonCount(1,'data');
    }

    public function test_it_categories_ordered_by_a_given_ordered()

    {
       $category =  factory(Category::class)->create([
        'order' => 2

       ]);
        $anothercategory =  factory(Category::class)->create([
        'order' => 1

       ]);

       $this->json('GET','api/categories')
       ->assertSeeInOrder([
        $anothercategory->slug, $category->slug
       ]);
   }

}
