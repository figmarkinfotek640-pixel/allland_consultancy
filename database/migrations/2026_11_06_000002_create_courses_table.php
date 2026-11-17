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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('country'); // Germany, Canada, United Kingdom, New Zealand
            $table->string('country_code', 10); // DE, CA, UK, NZ
            $table->string('degree_level'); // Bachelor's, Master's, PG Diploma, Vocational Ausbildung
            $table->string('duration'); // e.g. 1.5 - 2 Years, 1 Year, 3 Years
            $table->string('intake')->nullable(); // Winter (Oct) / Summer (Apr)
            $table->string('tuition_fee')->nullable(); // €0 (Tuition Free), etc.
            $table->string('stipend')->nullable(); // For Ausbildung (€1,000-€1,250/mo)
            $table->string('language_requirement')->nullable(); // IELTS 6.5, German B2
            $table->string('career_pathway')->nullable(); // 18-month Job search visa, PR
            $table->text('excerpt')->nullable();
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};

