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
        Schema::create('сomments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 25)->nullable(false);
            $table->string('email', 20)->nullable(false);
            $table->text('comment', 250)->nullable(true);
            $table->unsignedBigInteger('post_id');

            $table->index('post_id', 'comment_post_idx');
            $table->foreign('post_id', 'comment_post_fk')->on('posts')->references('id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('сomments');
    }
};
