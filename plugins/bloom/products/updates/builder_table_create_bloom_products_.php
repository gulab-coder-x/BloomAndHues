<?php namespace Bloom\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBloomProducts extends Migration
{
    public function up()
    {
        Schema::create('bloom_products_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('short_description');
            $table->string('description');
            $table->string('category');
            $table->string('images');
            $table->string('best_for');
            $table->string('shelf_life');
            $table->boolean('status');
            $table->string('sku')->unique();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bloom_products_');
    }
}
