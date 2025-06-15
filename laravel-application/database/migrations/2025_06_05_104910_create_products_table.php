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
            $table->string('name');
            $table->foreignId('category_id');
            $table->decimal('price',8,2);
            $table->integer('stock');
            $table->string('discount');
            $table->integer('count');
            $table->date('date_production');
            $table->date('best_before_date');
            $table->string('production_country');
            $table->string('production_company');
            $table->integer('barcode');
            $table->text('compound');
            $table->string('image');
            $table->enum('unit',['kg','g','l','ml','c','t']);
            $table->string('guarantee');
            $table->string('loader');
            $table->string('driver');
            $table->text('description');
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
