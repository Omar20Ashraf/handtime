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
            $table->boolean('show_on_top_sale')->default(0);
            $table->boolean('show_on_feature')->default(0);
            $table->boolean('show_on_new_arrival')->default(0);
            $table->string('title');
            $table->decimal('price', 8, 2);
            $table->tinyInteger('rate');
            $table->string('image');
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
