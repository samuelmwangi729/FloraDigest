<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('productName')->unique();
            $table->string('label')->unique();
            $table->string('color');
            $table->string('originalPrice');
            $table->string('newPrice');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('image4');
            $table->string('brand');
            $table->string('text');
            $table->string('category_id');
            $table->string('subcategory_id');
            $table->longText('Description');
            $table->integer('status');
            $table->string('width');
            $table->string('height');
            $table->string('depth')->nullable();
            $table->string('weight');
            $table->string('expiry')->nullable();
            $table->integer('count');
            $table->string('posted_by');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
