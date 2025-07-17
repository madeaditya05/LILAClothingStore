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
        Schema::create('wishlists', function (Blueprint $table) {
            $table->id();
            // KODE PERBAIKAN
$table->foreignId('user_id')->constrained()->onDelete('cascade');

// Definisikan tipe data secara manual agar cocok dengan tabel products
$table->unsignedBigInteger('product_id'); // Gunakan ini jika products.id dibuat dengan $table->id() atau bigIncrements()
// $table->unsignedInteger('product_id'); // Gunakan ini jika products.id dibuat dengan $table->increments()

// Definisikan foreign key secara manual
$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wishlists');
    }
};
