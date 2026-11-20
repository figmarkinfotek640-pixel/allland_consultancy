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
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('country_code', 10)->unique();
            $table->string('flag', 20)->default('🌐');
            $table->string('tab_badge')->nullable();
            $table->string('hero_badge')->nullable();
            $table->string('eyebrow')->nullable();
            $table->string('title')->nullable();
            $table->text('blurb')->nullable();
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->string('banner_image')->nullable();
            $table->json('stats')->nullable();
            $table->json('features')->nullable();
            $table->json('popular_courses')->nullable();
            $table->longText('requirements')->nullable();
            $table->string('living_cost')->nullable();
            $table->string('post_study_work')->nullable();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinations');
    }
};
