<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('instagram_reels', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('reel_url');
            $table->text('description')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('video_url')->nullable();
            $table->string('location_tag')->nullable();
            $table->string('likes_count')->nullable();
            $table->string('comments_count')->nullable();
            $table->integer('display_order')->default(0);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('instagram_reels');
    }
};
