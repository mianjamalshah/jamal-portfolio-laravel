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
    Schema::create('projects', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('slug')->unique();
        $table->string('category')->nullable();
        $table->string('short_description');
        $table->longText('full_description')->nullable();
        $table->json('technologies')->nullable();
        $table->string('github_url')->nullable();
        $table->string('live_url')->nullable();
        $table->string('image')->nullable();
        $table->boolean('featured')->default(false);
        $table->date('completion_date')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
