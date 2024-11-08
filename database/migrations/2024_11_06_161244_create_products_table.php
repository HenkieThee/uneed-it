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
            $table->decimal('price', 8, 2);
            $table->string('image')->nullable();
            $table->string('category');
            $table->timestamps();
        });

        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idvanklant')->nullable();
            $table->enum('typemachine', ['Niet gespecificeerd', 'Apple', 'Computer', 'Tablet', 'Laptop', 'Smartphone', 'Tarieve n computer', 'Tarieven Apple'])->nullable();
            $table->enum('garantie', ['ja', 'nee'])->nullable();
            $table->date('datum')->nullable();
            $table->string('photo_path', 255)->nullable();
            $table->text('omschrijving')->nullable();
            $table->timestamps();

            $table->foreign('idvanklant')->references('id')->on('users')->onDelete('cascade');
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
