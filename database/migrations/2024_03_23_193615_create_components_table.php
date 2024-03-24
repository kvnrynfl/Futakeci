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
        Schema::create('components', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['ingredient', 'packaging']);
            $table->string('name')->unique();
            $table->string('brand')->nullable();
            $table->text('description')->nullable();
            $table->string('url')->nullable();
            $table->integer('amount');
            $table->enum('unit', ['kg', 'gram']);
            $table->bigInteger('price');
            $table->timestamps();
        });

        Schema::create('component_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('component_id')->references('id')->on('components')->cascadeOnDelete();
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('components');
        Schema::dropIfExists('component_images');
    }
};
