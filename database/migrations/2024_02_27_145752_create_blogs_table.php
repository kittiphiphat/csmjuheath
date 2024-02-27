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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('email', 50)->nullable();
            $table->string('sex', 50)->nullable();
            $table->string('phone', 50)->nullable();
            $table->string('section', 50)->nullable();
            $table->string('content',300 )->nullable();
            $table->boolean('status')->default(true);
            $table->string('age')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
