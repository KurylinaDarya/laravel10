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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 120)->nullable(false);
            $table->string('slug', 120)->nullable(false)->index();
            $table->string('image', 220)->nullable(true);
            $table->string('annotation', 550)->nullable(true);
            $table->text('content')->nullable(false);
            $table->datetime('published_date')->nullable(true)->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
