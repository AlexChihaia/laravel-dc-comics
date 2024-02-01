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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->text('description')->nullable();
            $table->text('thumb');
            $table->decimal('price', 6, 2)->unsigned()->nullable();
            $table->string('series')->nullable();
            $table->date('sale_date')->nullable();
            $table->string('type', 30)->nullable();
            $table->string('artists')->nullable();
            $table->string('writers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
