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
        Schema::create('item_collections', function (Blueprint $table) {
            $table->id();
            $table->string('type_collection')->nullable();
            $table->string('slug_type_collection')->nullable();
            $table->string('collection')->nullable();
            $table->string('slug_collection')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_collections');
    }
};
