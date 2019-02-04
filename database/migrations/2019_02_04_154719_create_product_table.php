<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->integer('sub_category_id')->unsigned();
            $table->string('name');
            $table->decimal('satuan');
            $table->decimal('set_lusin');
            $table->decimal('lusin');
            $table->decimal('set_grosir');
            $table->decimal('grosir');
            $table->decimal('trim');
            $table->tinyInteger('status');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('CASCADE');
            $table->foreign('sub_category_id')->references('id')->on('sub_categories')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
