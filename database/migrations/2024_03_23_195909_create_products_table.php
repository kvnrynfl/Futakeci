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
            $table->string('name')->unique();
            $table->bigInteger('additional_cost')->nullable()->default(10000);
            $table->integer('production_cost')->nullable()->default(50);
            $table->integer('profit_margin')->nullable()->default(20);
            $table->timestamps();
        });

        Schema::create('product_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('product_id')->references('id')->on('products')->cascadeOnDelete();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('product_components', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('product_id')->references('id')->on('products')->cascadeOnDelete();
            $table->foreignId('component_id')->references('id')->on('components')->cascadeOnDelete();
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
