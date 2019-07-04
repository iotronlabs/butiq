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
        

         
        //   Schema::table('stocks', function (Blueprint $table)
        //  {
        //    $table->foreign('product_variation_id')
        //          ->references('id')
        //          ->on('product_variations');


        //   });

          
          
          


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
