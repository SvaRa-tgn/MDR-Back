<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('sub_category_id')->nullable();
            $table->foreign('sub_category_id')->references('id')->on('sub_categories');
            $table->string('type')->nullable();
            $table->string('collection_type')->nullable();
            $table->unsignedBigInteger('collection_id')->nullable();
            $table->foreign('collection_id')->references('id')->on('item_collections');
            $table->string('full_name')->nullable();
            $table->string('slug_full_name')->nullable();
            $table->string('small_name')->nullable();
            $table->string('slug_small_name')->nullable();
            $table->string('article')->nullable();
            $table->string('height')->nullable();
            $table->string('width')->nullable();
            $table->string('deep')->nullable();
            $table->string('status')->nullable();
            $table->string('korpus')->nullable();
            $table->string('fasad')->nullable();
            $table->unsignedBigInteger('color_korpus_id')->nullable();
            $table->foreign('color_korpus_id')->references('id')->on('colors');
            $table->unsignedBigInteger('color_fasad_id')->nullable();
            $table->foreign('color_fasad_id')->references('id')->on('colors');
            $table->string('price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
