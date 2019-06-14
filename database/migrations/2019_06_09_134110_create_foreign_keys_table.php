<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category_product', function (Blueprint $table)
         {
           $table->foreign('category_id')
                 ->references('id')
                 ->on('categories');

            $table->foreign('product_id')
                  ->references('id')
                  ->on('products')
                  ->onDelete('cascade');

          });

          Schema::table('product_variations', function (Blueprint $table)
         {
           $table->foreign('product_id')
                 ->references('id')
                 ->on('products');


          }); 
          Schema::table('product_variations', function (Blueprint $table)
         {
           $table->foreign('product_variation_type_id')
                 ->references('id')
                 ->on('product_variation_types');


          }); 


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('');
    }
}
