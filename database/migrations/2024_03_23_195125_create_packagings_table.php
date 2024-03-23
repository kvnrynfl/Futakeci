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
        Schema::create('packagings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('brand')->nullable();
            $table->text('description')->nullable();
            $table->string('url')->nullable();
            $table->integer('amount');
            $table->string('unit');
            $table->decimal('price', 10, 2);
            $table->timestamps();
        });

        Schema::create('packaging-images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('packaging_id')->references('id')->on('packagings')->cascadeOnDelete();
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packagings');
        Schema::dropIfExists('packaging-images');
    }
};
