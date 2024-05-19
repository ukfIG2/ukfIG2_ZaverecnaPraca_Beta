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
        Schema::create('speakers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('title_id')->constrained()->onDelete('cascade')->nullable();
            $table->foreignId('first_name_id')->constrained()->onDelete('cascade');
            $table->foreignId('middle_name_id')->constrained()->onDelete('cascade')->nullable();
            $table->foreignId('last_name_id')->constrained()->onDelete('cascade');
            $table->foreignId('company_id')->constrained()->onDelete('cascade')->nullable();
            $table->foreignId('position_id')->constrained()->onDelete('cascade')->nullable();
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->text('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('speakers');
    }
};
