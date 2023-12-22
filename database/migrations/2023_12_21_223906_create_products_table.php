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
            $table->json('name');
            $table->string('image');
            $table->string('author');
            $table->integer('pages');
            $table->integer('quantity');
            $table->decimal('price');
            $table->decimal('offer_price')->nullable();
            $table->enum('status', ['active', 'desactive'])->default('desactive');
            $table->text('description');
            $table->integer('sales_count')->default(0);
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
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
