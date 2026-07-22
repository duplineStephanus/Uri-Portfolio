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
        Schema::create('stories', function (Blueprint $table) {
            $table->id();

            $table->year('project_year')->nullable();

            $table->string('title');
            $table->string('slug')->unique();

            $table->string('excerpt', 500)->nullable();
            $table->longText('content')->nullable();

            $table->enum('type', [
                'brand_design',
                'web_design',
            ]);

            $table->boolean('featured')->default(false);
            $table->boolean('published')->default(false);

            $table->unsignedInteger('sort_order')->default(0);

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stories');
    }
};
